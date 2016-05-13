<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index($locale)
    {
    	\App::setLocale($locale);

	    return view('index');
    }
}
