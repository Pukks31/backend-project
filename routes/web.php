<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/producto-mi-categoria', function () {
    return "Hola";
});

Route::get('productos/{nombre}', function ($nombre) {
    return "El nombre del producto es $nombre";
});

Route::get('productos/create', function ($nombre) {
    return "Listado de formulario";
});

Route::get('productos/{id}', function ($id) {
    return "El id del producto es $id";
});

Route::get('productos/{id}/{categoria}', function ($id, $categoria) {
    return "El id del producto es $id y la categoria es $categoria";
});