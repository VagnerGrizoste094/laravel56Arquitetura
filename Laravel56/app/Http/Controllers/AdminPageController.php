<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller 
{
    public function index(Request $request) 
    {
		$url = $request->getRequestUri();
    }
}
