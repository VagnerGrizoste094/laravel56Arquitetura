<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;

class CarouselPageController extends Controller
{   
    
    public function index(Request $request) {
	$url = $request->getRequestUri();
	return view('admin.home', compact('url'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Imagem $imagem)
    {
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