<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;
use App\Models\TextoSlide;

class AdminPageController extends Controller {

    //redirecionamento via post
    public function index(Request $request) {
	$url = $request->getRequestUri();
	return view('admin.home', compact('url'));
    }

    //formulario carousel
    public function create() {
	return view('admin.home');
    }

    public function editarHome(Request $request) {
	$url = $request->getRequestUri();
	return view('admin.home', compact('url'));
    }

    public function uploadImg(Request $request, Imagem $imagem) {
//	$busca = $request->input('texto_home');
	$input = $request->allFiles();
	$values = array_keys($input);

	for ($i = 0; $i < count($input); $i++) {
	    $nome_img = $request->file($values[$i])->getClientOriginalName();
	    $imagem::create(['name' => $nome_img,
			    'caminho' => 'storage/img/',
			    'local' => 'carousel']);
	    $request->file($values[$i])->storeAs('public/img/', $nome_img);
	}
	return redirect()->route('admin.home');
    }

    public function textoSlide(Request $request, TextoSlide $textoSlide) {
	$busca = $request->all('textoimg1', 'textoimg2');
	foreach ($busca as $key => $value) {
	    $textoSlide::create(['descricao' => $value
	    ]);
	}
	return redirect()->route('admin.textoSlide');
    }
}
