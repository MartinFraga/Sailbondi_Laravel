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

Route::get('/', 'MainController@index')->name('home');

Route::get('/faqs', 'MainController@faqs');

Route::get('/contact', 'ContactMessageController@create');
Route::post('/contact', 'ContactMessageController@store')->name('contact.store');

Route::get('/newsletter', 'NewsletterController@create');
Route::post('/newsletter/store', 'NewsletterController@store')->name('newsletter.store');

Route::get('/colonia', 'MainController@colonia');

Route::get('/montevideo', 'MainController@montevideo');

Route::get('/punta', 'MainController@punta');


Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');


Route::group(["prefix" => "carrito"], function() {
    Route::get('/', 'CarritoController@index')->middleware('auth');
    Route::get('/index', 'CarritoController@index')->name('carrito.index')->middleware('auth');
    Route::post('/add', 'CarritoController@add')->name('carrito.add')->middleware('auth');    
    Route::get('/delete/{id}', 'CarritoController@delete')->middleware('auth');
    Route::get('/save', 'CarritoController@save')->middleware('auth');    
});


Route::group(["prefix" => "destinos"], function() {
    Route::get('/view/{id}', 'DestinosController@view');   
});

Route::group(["prefix" => "admin"], function() {
    Route::get('/', 'DestinosController@index')->middleware('admin');    
    Route::get('/index', 'DestinosController@index')->middleware('admin');  
    Route::get('/manage/{option}/{id?}', 'DestinosController@manage')->middleware('admin');  
    Route::post('/save', 'DestinosController@save')->middleware('admin');  
    Route::get('/delete/{id}', 'DestinosController@delete')->middleware('admin');
});

Route::group(["prefix" => "transacciones"], function() {

    Route::get('/create/{destinoId}', 'TransaccionesController@create');    
    Route::post('/save', 'TransaccionesController@save');
   
});
