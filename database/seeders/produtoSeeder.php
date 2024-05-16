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
          'foto'=>'https://d3ugyf2ht6aenh.cloudfront.net/stores/943/690/products/camisa-vinho-zip-off1-2efb5011a08d8ca52a16196375310554-480-0.jpg'
          'user_id'=>1,               
          ]
          [
            'nome'=> 'calça preta', 
            'descricao'=>'calça jeans preta',
            'valor'=> ,
            'foto'=>'https://pitbulljeans.com.br/media/catalog/product/cache/0/image/800x1067/9df78eab33525d08d6e5fb8d27136e95/8/0/80537-preta-2.jpg'
            'user_id'=>1, 
        ]
        [
            'nome'=> 'sapato social', 
            'descricao'=>'sapato social masculino',
            'valor'=>150  ,
            'foto'=>'https://img.irroba.com.br/fit-in/600x600/filters:fill(fff):quality(80)/sapatode/catalog/produtos/pipper/dsc0542.JPG'
            'user_id'=>1, 
        ]
        [
            'nome'=> 'conjunto', 
            'descricao'=>'conjunt6o moleton masculino',
            'valor'=>120 ,
            'foto'=>'https://www.google.com/imgres?q=inverno%20conjunto%20moletom%20masculino&imgurl=https%3A%2F%2Fa-static.mlcdn.com.br%2F450x450%2Fconjunto-de-moletom-flanelado-inverno-blusa-e-calca-masculina-relaxado%2Frelaxadostore%2Fcjmlprop01largg%2F6709cc216ce825a3d35b73ad3988ff25.jpeg'
            'user_id'=>1, 
        ]
        [
            'nome'=> 'vestido preto', 
            'descricao'=>'vestido socila preto',
            'valor'=>150  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_995729-MLB70110741057_062023-F.webp'
            'user_id'=>1, 
        ]
        [
            'nome'=> 'sobretudo', 
            'descricao'=>'Sobretudo feminino com botão',
            'valor'=>180  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_813198-MLB76008037027_042024-F.webp'
            'user_id'=>1, 
        ]
        [
            'nome'=> 'sapato social', 
            'descricao'=>'sapato social feminino',
            'valor'=>100  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_835304-MLB52463869633_112022-F.webp'
            'user_id'=>1, 
        ]
        [
            'nome'=> 'bolsa social', 
            'descricao'=>'Bolsa feminina de lado e de mão',
            'valor'=>80  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_835304-MLB52463869633_112022-F.webp'
            'user_id'=>1, 
        ]
        [
            'nome'=> 'conjunto social', 
            'descricao'=>'conjunto social feminino',
            'valor'=>150  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_949408-MLB72105562096_102023-F.webp'
            'user_id'=>1, 
        ]
        [
            'nome'=> macacão menina', 
            'descricao'=>'macacão feminino infantil',
            'valor'=>80  ,
            'foto'=>'https://http2.mlstatic.com/D_NQ_NP_2X_832527-MLB73615405508_122023-F.webp'
            'user_id'=>1, 
        ]
       ]


       );
    }
}
