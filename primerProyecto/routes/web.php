<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\EjemploController;
use App\Http\Controllers\Ejemplo2Controller;
// use App\Http\Controllers\PaginasController;


// Route::get('/', function () {
//     return view('welcome');
//     // return 'Bienvenido';
// });

// Route::get('/about', function () {
//     return "Sobre nosotros";
// });

// Route::get('/post/{id}', function ($id) {
//     return "Este es el post nº".$id;
// })->where('id', '[0-9]+');

// Route::get('/inicio', [EjemploController::class, 'inicio']);

// Route::get('/index/{id}', [Ejemplo2Controller::class, 'index']);

// Route::get('/', [PaginasController::class, 'inicio']);
// Route::get('/inicio', [PaginasController::class, 'inicio']);
// Route::get('/quienesSomos', [PaginasController::class, 'quienesSomos']);
// Route::get('/dondeEstamos', [PaginasController::class, 'dondeEstamos']);
// Route::get('/foro', [PaginasController::class, 'foro']);

Route::resource("post", Ejemplo2Controller::class);
