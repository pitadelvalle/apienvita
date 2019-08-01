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

Route::get('/', function () {
    return view('welcome');
});
//asociaciones
Route::get('/asociaciones','AsociacioneController@index');

Route::post('/addimage3','AsociacioneController@store')->name('addimage3');

Route::get('asociacionespage' ,'AsociacioneController@display');

Route::get('/edit3/{id}','AsociacioneController@edit');

Route::put('/update3/{id}','AsociacioneController@update');

Route::get('/delete3/{id}','AsociacioneController@delete');

//ayudas
Route::get('/ayuda','AyudaController@index');

Route::post('/addimage4','AyudaController@store')->name('addimage4');

Route::get('ayudapage' ,'AyudaController@display');

Route::get('/edit4/{id}','AyudaController@edit');

Route::put('/update4/{id}','AyudaController@update');

Route::get('/delete4/{id}','AyudaController@delete');

//routas de noticias
Route::get('/noticias','NoticiaController@index');

Route::post('/addimage','NoticiaController@store')->name('addimage');

Route::get('noticiaspage' ,'NoticiaController@display');

Route::get('/edit/{id}','NoticiaController@edit');

Route::put('/update/{id}','NoticiaController@update');

Route::get('/delete/{id}','NoticiaController@delete');

//routas de emergencia
Route::get('/emergencia','EmergenciaController@index');

Route::post('/addimage1','EmergenciaController@store')->name('addimage1');

Route::get('emergenciaspage' ,'EmergenciaController@display');

Route::get('/edit1/{id}','EmergenciaController@edit');

Route::put('/update1/{id}','EmergenciaController@update');

Route::get('/delete1/{id}','EmergenciaController@delete');

//routas de vivos
Route::get('/vivos','VivoController@index');

Route::post('/addimage2','VivoController@store')->name('addimage2');

Route::get('vivospage' ,'VivoController@display');

Route::get('/edit2/{id}','VivoController@edit');

Route::put('/update2/{id}','VivoController@update');

Route::get('/delete2/{id}','VivoController@delete');