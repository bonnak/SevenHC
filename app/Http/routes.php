<?php

// Route::get('/{locale}', function ($locale) {
//     App::setLocale($locale);

//     return view('index');
// });

Route::get('/', 'MainController@index');
Route::get('index_old', 'MainController@index_old');
