<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TextoSlide;

class TextoSlidePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $url = $request->getRequestUri();
       $textoSlides = TextoSlide::all();
       return view('admin.home', compact('url', 'textoSlides'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, TextoSlide $textoSlide)
    {
        $busca = $request->all('titulo', 'descricao');
        $textoSlide::create([
            'titulo' => $busca['titulo'],
			'descricao' => $busca['descricao']
        ]);	
        return redirect()->route('textoSlide.index');
    }
}