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
    $notas = DB::table('notas') ->get();

    return view('notas', ['notas' => $notas]);
}) -> name('listar');


Route::get('agregar', function () {
    return view('agregar');
})->name('nuevanota');

Route::get('notas/{id}/editar', function($id){
    $notas = DB::table('notas')
    ->where('id', $id)
    ->first();
    
    return view('editar', ['notas' => $notas]);
})->name('notas.edit');
