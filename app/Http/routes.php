<?php

// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);

//     return view('index');
// });

Route::get('/', 'MainController@index');


Route::group(['prefix' => 'admin'], function(){
	Route::get('/', 'Admin\AdminController@index');
	Route::get('product/create', 'Admin\ProductController@create');
});
