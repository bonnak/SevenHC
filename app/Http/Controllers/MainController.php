<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
    	$products = \App\Product::with('photo_primary')->get();

    	//dd($products[0]->photo_primary);

	    return view('index')->with('products', $products);
    }
}
