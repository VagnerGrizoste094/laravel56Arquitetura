<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagem;

class StaticPageController extends Controller
{
    public function getHome(Imagem $imagem){
	$carrousel = $imagem->all('id','name','local')->where('local','carousel');
	$textoslide = $imagem->all('id','name','local')->where('local','textoslide');;		
	//print_r($textoslide)and die(); 
	return view('website.home', compact('carrousel', 'textoslide'));
    }
     
}