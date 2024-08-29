<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [MiController::class, 'index']);
Route::get("/crear", [MiController::class, 'create']);
Route::get("/articulos", [MiController::class, 'store']);
Route::get("/mostrar", [MiController::class, 'show']);
