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
    return view('welcome');
});

Route::get('/practica', function () {
    return view('template');
});

Route::get('foto', function () {
    return view('foto');
})->name('foto');

Route::get('blog', function () {
    return view('blog');
})->name('blog');


Route::get('nosotros/{nombre?}', function ($nombre = null) {
    $equipo = ['Heiberg', 'Thais', 'Donhis'];
    //return view('nosotros', ['equipo' => $equipo]);
    return view('nosotros', compact('equipo', 'nombre'));
})->name('nosotros');
