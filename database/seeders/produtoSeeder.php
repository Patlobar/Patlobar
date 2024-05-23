<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('produtos')->insert(
       [

          [  'nome'=> 'camiseta vermelha', 
          'descricao'=>'camisa vermelha cor da paixão',
          'valor'=> 40,
          'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_811710-MLB54693115172_032023-F.webp',
          'user_id'=>1,               
       ],
          [
            'nome'=> 'calça preta', 
            'descricao'=>'calça jeans preta',
            'valor'=>80 ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_808628-MLB54690300880_032023-F.webp',
            'user_id'=>1,  
          ],
        [
            'nome'=> 'sapato social', 
            'descricao'=>'sapato social masculino',
            'valor'=>150  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_906525-MLA74781055861_022024-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'conjunto Calvin Klein', 
            'descricao'=>'conjunt6o moleton masculino',
            'valor'=>320 ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_843730-MLB76460949087_052024-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'vestido preto', 
            'descricao'=>'vestido socila preto',
            'valor'=>150  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_995729-MLB70110741057_062023-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'sobretudo', 
            'descricao'=>'Sobretudo feminino com botão',
            'valor'=>180  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_813198-MLB76008037027_042024-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'sapato social', 
            'descricao'=>'sapato social feminino',
            'valor'=>100  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_835304-MLB52463869633_112022-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'bolsa social', 
            'descricao'=>'Bolsa feminina de lado e de mão',
            'valor'=>80  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_968205-MLU70421835213_072023-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'conjunto social', 
            'descricao'=>'conjunto social feminino',
            'valor'=>150  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_949408-MLB72105562096_102023-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Vestido Infantl', 
            'descricao'=>'macacão feminino infantil',
            'valor'=>60  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_832308-MLB75703115340_042024-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'macacão menina', 
            'descricao'=>'macacão feminino infantil',
            'valor'=>80  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_832527-MLB73615405508_122023-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Sadália Infantil menina', 
            'descricao'=>'Sadália infantil feminina',
            'valor'=>70  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_640476-MLB74541002739_022024-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Bolsa menina', 
            'descricao'=>'Bolsa feminino Mickey',
            'valor'=>50  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_603460-MLU73021742927_112023-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Tênis Infantil Masculino', 
            'descricao'=>'Tênis infantil masculino Sapatênis',
            'valor'=>60  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_795711-MLB45548369686_042021-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Casça Jeans Masculina Infantil', 
            'descricao'=>'Calça Jeans Menino Masculina com Lycra',
            'valor'=>50  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_781087-MLB74694619405_022024-F.webp',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Jaqueta masculina infantil', 
            'descricao'=>'Jaqueta Corta Vento Infantil Masculina',
            'valor'=>120  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_790745-MLB75882886961_042024-F.webp',
            'user_id'=>1, 
        ],
       ]


       );
    }
}
