<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;
use App\Models\TextoSlide;

class StaticPageController extends Controller
{
    public function getHome(Imagem $imagem, TextoSlide $textoSlide){
	$carrousel = $imagem->all('id','name','local')->where('local','carousel');
	$textoslide = $textoSlide->all('id','titulo','descricao');	
	//var_dump($textoslide)and die(); 
	return view('website.home', compact('carrousel', 'textoslide'));
    }
    public function create()
    {
	// O caminho da nossa imagem no servidor
	$caminho_imagem = url('/storage/img/portfolio-5.jpg');
	// Retorna o identificador da imagem
	$imagem = imagecreatefromjpeg($caminho_imagem);	
	
	// Cria duas variáveis com a largura e altura da imagem
	list( $largura, $altura ) = getimagesize( $caminho_imagem );

	// Nova largura e altura
	$nova_largura = 330;
	$nova_altura = 200;

	// Cria uma nova imagem em branco
	$nova_imagem = imagecreatetruecolor( $nova_largura, $nova_altura );

	// Copia a imagem para a nova imagem com o novo tamanho
	imagecopyresampled(
	    $nova_imagem, // Nova imagem 
	    $imagem, // Imagem original
	    0, // Coordenada X da nova imagem
	    0, // Coordenada Y da nova imagem 
	    0, // Coordenada X da imagem 
	    0, // Coordenada Y da imagem  
	    $nova_largura, // Nova largura
	    $nova_altura, // Nova altura
	    $largura, // Largura original
	    $altura // Altura original
	);

	// Cria a imagem
	imagejpeg( $nova_imagem, 'storage/img/nova_imagem.jpg', 100 ); 
	// Remove as imagens temporárias
	imagedestroy($imagem);
	imagedestroy($nova_imagem);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}