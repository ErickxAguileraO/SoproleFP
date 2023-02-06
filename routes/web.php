<?php

use Illuminate\Support\Facades\Route;

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
    return view('web.home');
});
Route::get('/conocenos', function () {
    return view('web.conocenos.index');
});

Route::get('/politicas-de-privacidad', function () {
    return view('web.politicas.index');
});

Route::get('/terminos-condiciones', function () {
    return view('web.terminos.index');
});

Route::get('/informacion-consumidor', function () {
    return view('web.informacionConsumidor.index');
});

Route::get('/mini-sitio', function () {
    return view('web.miniSitios.index');
});

Route::get('/nuestras-recetas', function () {
    return view('web.recetas.index');
});