<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;

class CarouselPageController extends Controller
{   
    
    public function index(Request $request) 
    {
    	$url = $request->getRequestUri();
    	return view('admin.home', compact('url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Imagem $imagem)
    {
        $input = $request->allFiles();
        $values = array_keys($input);

    	for ($i = 0; $i < count($input); $i++) {
    	    $nome_img = $request
                ->file($values[$i])
                ->getClientOriginalName();

    	    $imagem::create([
                'name' => $nome_img,
    			'caminho' => 'storage/img/',
    			'local' => 'carousel'
            ]);
    	    $request->file($values[$i])->storeAs('public/img/', $nome_img);
    	}
    	return redirect()->route('admin.home');
    }
}