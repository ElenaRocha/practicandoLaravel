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
Route::get("/contacto", [MiController::class, 'contactar']);
Route::get("/galeria", [MiController::class, 'galeria']);
Route::get("/insertar", function () {
    DB::insert("INSERT INTO articulos (NOMBRE_ARTICULO, PRECIO, PAIS_ORIGEN, SECCION, OBSERVACIONES) VALUES (?, ?, ?, ?, ?)", ["JARRON", 15.2, "JAPON", "CERAMICA", "GANGA"]);
});
Route::get("/leer", function () {
    $resultados = DB::select("SELECT * FROM articulos WHERE ID=?", [1]);
    foreach($resultados as $articulo){
        return $articulo->nombre_articulo;
    }
});

Route::get("/actualizar", function () {
    DB::update("UPDATE articulos SET SECCION='DECORACION' WHERE ID=?", [2]);
});
Route::get("/borrar", function () {
    DB::delete("DELETE FROM articulos WHERE ID=?", [2]);
});
