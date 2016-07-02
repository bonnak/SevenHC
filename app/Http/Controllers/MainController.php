<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
    	//\App::setLocale('kh');

	    return view('index');
    }

    public function index_old()
    {
    	//\App::setLocale('kh');

	    return view('indexOld');
    }
}
