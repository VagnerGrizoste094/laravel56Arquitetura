<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioPageController extends Controller
{
    public function index(Request $request) 
    {
		$url = $request->getRequestUri();
		return view('admin.home', compact('url'));
    }
    
}
