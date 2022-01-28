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
    return view('notas');
});

Route::get('agregar', function(){
    return view('agregar');
});

Route::get('editar', function(){
    return view('editar');
});

Route::get('media/videos', function(){
    return 'aqui se muestran los videos';
});

Route::get('basedatos', function(){
    return 'aqui te lleva a una teórica bases de datos que aun no existe';
});

Route::get('basedatos/{id}/editar', function($id){
    return 'aqui se van a editar las notas:' .$id;
});

Route::get('basedatos/alumno', function(){
    return 'aqui te muestran datos de un alumno';
});

Route::get('notas/actualizar', function(){
    return 'aqui sera la vista para actualizar una nota';
});
