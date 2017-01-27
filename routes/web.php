<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('vue');
// });
//
Auth::routes();
// Route::get('/', 'HomeController@index');
Route::get('/', 'PagesController@homepage');
Route::get('/contact', 'PagesController@contact');
