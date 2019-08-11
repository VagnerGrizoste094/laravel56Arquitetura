<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;
use App\Models\TextoSlide;

class StaticPageController extends Controller
{
    public function getHome(Imagem $imagem, TextoSlide $textoSlide){
    	$carousel = $imagem
            ->all('id','name','local')
            ->where('local','carousel');
    	$textoslide = $textoSlide
            ->all('id','titulo','descricao');	
    	return view('website.home', compact('carousel', 'textoslide'));
    }
    
    public function create()
    {
    	$caminho_imagem = url('/storage/img/portfolio-5.jpg');
    	$imagem = imagecreatefromjpeg($caminho_imagem);	
    	list( $largura, $altura ) = getimagesize( $caminho_imagem );
    	$nova_largura = 330;
    	$nova_altura = 200;
    	$nova_imagem = imagecreatetruecolor( $nova_largura, $nova_altura );
    	imagecopyresampled(
    	    $nova_imagem,
    	    $imagem,
    	    0,
    	    0,
    	    0,
    	    0,  
    	    $nova_largura,
    	    $nova_altura,
    	    $largura,
    	    $altura
    	);
    	imagejpeg( $nova_imagem, 'storage/img/nova_imagem.jpg', 100 ); 
    	imagedestroy($imagem);
    	imagedestroy($nova_imagem);
    }
}