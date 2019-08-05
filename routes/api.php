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

Route::resource('/public/api/noticias' , 'NoticiaController');

Route::get('/public/api/noticias','NoticiaController@index');

Route::post('/public/api/addimage','NoticiaController@store')->name('addimage');

Route::get('/public/api/noticiaspage' ,'NoticiaController@display');

Route::get('/public/api/edit/{id}','NoticiaController@edit');

Route::put('/public/api/update/{id}','NoticiaController@update');

Route::get('/public/api/delete/{id}','NoticiaController@delete');

Route::resource('emergencias' , 'EmergenciaController');

Route::resource('ayudas' , 'AyudaController');

Route::resource('vivos' , 'VivoController');