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

Route::resource('/public/api/noticias/' , 'NoticiaController');

Route::get('/public/api/noticias/','NoticiaController@index');

Route::post('/public/api/addimage/','NoticiaController@store')->name('addimage');

Route::get('/public/api/noticiaspage/' ,'NoticiaController@display');

Route::get('/public/api/edit/{id}','NoticiaController@edit');

Route::put('/public/api/update/{id}','NoticiaController@update');

Route::get('/public/api/delete/{id}','NoticiaController@delete');

//emeregencia

Route::resource('/emergencias' , 'EmergenciaController');

Route::get('/emergencia','EmergenciaController@index');

Route::post('/addimage1','EmergenciaController@store')->name('addimage1');

Route::get('emergenciaspage' ,'EmergenciaController@display');

Route::get('/edit1/{id}','EmergenciaController@edit');

Route::put('/update1/{id}','EmergenciaController@update');

Route::get('/delete1/{id}','EmergenciaController@delete');



//ayuda
Route::resource('ayudas' , 'AyudaController');

Route::get('/ayuda','AyudaController@index');

Route::post('/public/addimage4','AyudaController@store')->name('addimage4');

Route::get('ayudapage' ,'AyudaController@display');

Route::get('/edit4/{id}','AyudaController@edit');

Route::put('/update4/{id}','AyudaController@update');

Route::get('/delete4/{id}','AyudaController@delete');

//asociaciones
Route::resource('/asociaciones' , 'AsociacioneController');


//vivo
Route::resource('vivos' , 'VivoController');

Route::get('/vivos','VivoController@index');

Route::post('/addimage2','VivoController@store')->name('addimage2');

Route::get('vivospage' ,'VivoController@display');

Route::get('/edit2/{id}','VivoController@edit');

Route::put('/update2/{id}','VivoController@update');

Route::get('/delete2/{id}','VivoController@delete');