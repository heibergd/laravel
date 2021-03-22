<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PaginasController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PaginasController::class, 'inicio'])->name('inicio');

/* ===========================================================
 Practica de rutas By: Heiberg Domínguez
=========================================================== */

// Route::get('/practica', function () {
//     return view('template');
// });

// Route::get('foto', function () {
//     return view('foto');
// })->name('foto');
Route::get('/notas', [PaginasController::class, 'nota'])->name('nota');
Route::get('/detalle/{id}', [PaginasController::class, 'detalle'])->name('nota.detalle');
Route::get('/foto', [PaginasController::class, 'foto'])->name('foto');
Route::post('/', [PaginasController::class, 'crear'])->name('nota.crear');

// Route::get('blog', function () {
//     return view('blog');
// })->name('blog');
Route::get('/blog', [PaginasController::class, 'blog'])->name('blog');

// Route::get('nosotros/{nombre?}', function ($nombre = null) {
//     $equipo = ['Heiberg', 'Thais', 'Donhis'];
//     //return view('nosotros', ['equipo' => $equipo]);
//     return view('nosotros', compact('equipo', 'nombre'));
// })->name('nosotros');
Route::get('/nosotros/{nombre?}', [PaginasController::class, 'nosotros'])->name('nosotros');
