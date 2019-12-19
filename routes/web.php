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

Route::post('/agregarACarrito', 'CarritoController@agregarPasaje')->name('agregarACarrito')->middleware('auth');

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');


Route::group(["prefix" => "pasajes"], function() {

    Route::get('/create', ['uses' => 'PasajesController@create']);    
    Route::get('/view/{id}', 'PasajesController@view');    
    Route::post('/save', 'PasajesController@save');
    
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
