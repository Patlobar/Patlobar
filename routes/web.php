<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;

Route::get('/home', function () {
    return view('welcome');
});

//Route::view('/', 'home');
Route::get('/', function() {
//dd(Produto::all());

$listaProdutos =Produto::all();
return view('home', compact('listaProdutos'));

});
Route::view('/cria-conta', 'cria-conta');
Route::view('/testedeconteudo', 'teste');
Route::post('/salva-usuario',
function(Request $request) {
//dd($request);
$usuario = new User();
$usuario->name= $request->name;
$usuario->email= $request->email;
$usuario->password= $request->senha;
$usuario->save();
dd("salvo com sucesso!");

})->name('salva-usuario');

//.................Produtos.........................

Route::view('/cadastra-produto', 'cadastra-produto')->middleware('auth');
Route::post('/salva-produto',
function (Request $request) {
//dd(request);
$produto= new Produto();
$produto->nome = $request->nome;
$produto->descricao = $request->descricao;
$produto->valor = $request->preco;
$file= request()->file('foto');

$foto = $file->store('produtos', ['disk' => 'fotos']);
$produto->foto = $foto;

$produto->user_id = 1;


$produto->save();
//dd("salvo com sucesso!!");
return redirect('login');

})->name('salva-produto')->middleware('auth');

Route::view('/login','login')->name("login");

Route::post('/logar',function (request $request){
  //  dd($request);


$credentials = $request->validate([
    'email'=>['required','email'],
    'senha'=>['required'],
]);
if(Auth::attempt(['email'=>$request->email,'password'=>$request->senha])){
$request->session()->regenerate();
return redirect()->intended('/cadastra-produto');
}
else{
    dd("usuário ou senha incorreta");
}
})->name('logar');
Route::get('/sair',function(){
    Auth::logout();
    return redirect('/');
});