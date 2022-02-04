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

Route::get('/', function(){
    $notas = [
        'Primer nota',
        'Segunda nota',
        'Tercera nota',
        'Cuarta nota'
    ];
    return view('notas', ['notas' => $notas]);
})->name('listar');

Route::get('notas/{id}', function($id){
    return 'Aqui veremos el detalle de la nota: '.$id;
});

Route::get('agregar', function(){
    return view('agregar');
})->name('nuevanota');

Route::get('editar', function(){
    return view('editar');
});