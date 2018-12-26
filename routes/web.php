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

Route::get('/','PrincipalController@index')
          ->name('principal');

Route::get('/acercade', 'AcercadeController@index')
        ->name('acercade');
Route::get('/productos-desc', 'ProductosController@index')
        ->name('productosDescripcion');
Route::get('/sistema-bioenergetix-wellnes', 'ProductosController@index1')
        ->name('bioenergetix');
Route::get('/soft-esc', 'ProductosController@index2')
        ->name('softEscaneo');
Route::get('/nes-mihealth', 'ProductosController@index3')
        ->name('mihealth');
Route::get('/infoceuticals', 'ProductosController@index4')
        ->name('infoceuticals');
Route::get('/puntoeleccion', 'ProductosController@index5')
        ->name('puntoEleccion');
Route::get('/ciencia', 'CienciaController@index')
        ->name('ciencia');
Route::get('/ciencia/como-funciona-nes', 'CienciaController@index1')
        ->name('tecnologiaNES');
Route::get('/centro-recursos', 'CienciaController@index2')
        ->name('centroRecursos');
Route::get('/ciencia/campo-cuerpo-humano', 'CienciaController@index3')
        ->name('campoCuerpoHumano');
Route::get('/ciencia/investigacion', 'CienciaController@index4')
        ->name('investigacion');
Route::get('/ciencia/casos-estudio', 'CienciaController@index5')
        ->name('casosEstudio');
        Route::get('/ciencia/casos-estudio/caso1', 'CienciaController@index51')
                ->name('casosEstudioC1');
        Route::get('/ciencia/casos-estudio/caso2', 'CienciaController@index52')
                ->name('casosEstudioC2');



Route::get('/ciencia/ensayos-clinicos', 'CienciaController@index6')
        ->name('ensayosClinicos');
Route::get('/resultados', 'CienciaController@index7')
        ->name('resultados');
Route::get('/testimonios', 'CienciaController@index71')
        ->name('testimonios');

Route::get('/preguntas-frecuentes', 'PreguntasController@index')
        ->name('PFrecuentes');
Route::get('/preguntas-frecuentes/ver/{id}', 'PreguntasController@show')
        ->name('verP');
Route::get('/contactenos', 'CienciaController@index8')
        ->name('contactenos');


Route::post('mensaje','MensajeController@mensaje')->name('mensaje');