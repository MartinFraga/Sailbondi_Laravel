<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MainController@index');

Route::get('/faqs', 'MainController@faqs');

Route::get('/contact', 'MainController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(["prefix" => "pasajes"], function() {
    Route::get('/', ['uses' => 'PasajesController@index']);

    Route::get('/show/{id}', 'PasajesController@show');
});


