<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/inicio', 'ProductosController@index');
Route::get('/inicio', [ProductosController::class, 'index']);
Route::get('/crear', [ProductosController::class, 'create']);
