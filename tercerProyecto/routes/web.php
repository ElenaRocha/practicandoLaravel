<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

Route::resource('/productos', ProductosController::class);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/inicio', 'ProductosController@index');
// Route::get('/inicio', [ProductosController::class, 'index']);
// Route::get('/crear', [ProductosController::class, 'create']);
// Route::get('/insertar', [ProductosController::class, 'store']);
// Route::get('/actualizar', [ProductosController::class, 'update']);
// Route::get('/borrar', [ProductosController::class, 'destroy']);
