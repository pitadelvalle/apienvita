<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('asociaciones' , 'AsociacioneController');

Route::resource('noticias' , 'NoticiaController');

Route::get('/noticias','NoticiaController@index');

Route::post('/addimage','NoticiaController@store')->name('addimage');

Route::get('noticiaspage' ,'NoticiaController@display');

Route::get('/edit/{id}','NoticiaController@edit');

Route::put('/update/{id}','NoticiaController@update');

Route::get('/delete/{id}','NoticiaController@delete');

Route::resource('emergencias' , 'EmergenciaController');

Route::resource('ayudas' , 'AyudaController');

Route::resource('vivos' , 'VivoController');