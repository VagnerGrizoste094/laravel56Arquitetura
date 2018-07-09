<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller {

    //redirecionamento via post
    public function index(Request $request) {
	$url = $request->getRequestUri();
//	$this->get('admin/carousel');
	//return redirect()->route('carousel');
    }
    
}
