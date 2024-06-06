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
        [
            'nome'=> 'Toalhas de Banho', 
            'descricao'=>'Jogo de taolhas de banho com detalhes dourados',
            'valor'=>70  ,
            'foto'=>'https://cdn.awsli.com.br/600x1000/2540/2540198/produto/212996128/toalha-banho-ohana-barata-linda-para-presente-natal-mercado-livre-barata-fabrica-azul-petroleo-banhao-rosa-bebe-menina-menino-atacadinho-brusque-banhao-bordado-rgbdhm.jpg',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Jogo de roupão', 
            'descricao'=>'Conjunto roupão de banho casal',
            'valor'=>100  ,
            'foto'=>'https://www.catran.com.br/catran/fotos/Roupao-de-banho-adulto-feminino-maelle-1635165397__m372546.jpg',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Roupão infantil', 
            'descricao'=>'roupão infantil personagens',
            'valor'=>89.90  ,
            'foto'=>'https://www.kidsclothes.com.br/cdn/shop/products/product-image-310737552.jpg?v=1571726675',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Cortina box', 
            'descricao'=>'Cortina para banheiro box varão',
            'valor'=>49.90  ,
            'foto'=>'https://m.media-amazon.com/images/I/61NxJtGO79L._AC_UF894,1000_QL80_.jpg',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Jogo de cozinha', 
            'descricao'=>'Kit jogo de cozinha',
            'valor'=>90  ,
            'foto'=>'https://images.tcdn.com.br/img/img_prod/548599/2123_1_20240226132439.jpg',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Jogo de panelas', 
            'descricao'=>'Jogo de panelas anti aderente',
            'valor'=>120  ,
            'foto'=>'https://cdn.awsli.com.br/2500x2500/2092/2092462/produto/22233520464239e3725.jpg',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Jogo de talheres', 
            'descricao'=>'Jogo de talheres tramontina',
            'valor'=>40  ,
            'foto'=>'https://m.media-amazon.com/images/I/71+A34NmQ-L._AC_UF894,1000_QL80_.jpg',
            'user_id'=>1, 
        ],
        [
            'nome'=> 'Jogo de pratos', 
            'descricao'=>'Jogo de pratos Oxford',
            'valor'=>130  ,
            'foto'=>'https://images.tcdn.com.br/img/img_prod/766438/jogo_6_pratos_de_sobremesa_de_porcelana_garden_21cm_4853_1_be00c032f5a207ef382bf2a71ded4313.jpg',
            'user_id'=>1, 
        ],
       ]


       );
    }
}
