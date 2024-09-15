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

/*
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
*/

Route::get("/leer", function () {
    // $articulos = Articulo::all();
    // foreach($articulos as $articulo){
    //     echo "Nombre: " . $articulo->nombre_articulo . "Precio: " . $articulo->precio . "<br>";
    // }
    $articulos = Articulo::where("pais_origen", "China")->orderBy("nombre_articulo")->take(5)->get();
    return $articulos;
});
Route::get("/insertar", function () {
    $articulos = new Articulo;
    $articulos->nombre_articulo="Pantalones";
    $articulos->precio=60;
    $articulos->pais_origen="España";
    $articulos->observaciones="Lavados a la piedra";
    $articulos->seccion="Confección";

    $articulos->save();
});
Route::get("/actualizar", function () {
    $articulos = Articulo::find(7);
    $articulos->nombre_articulo="Pantalones";
    $articulos->precio=90;
    $articulos->pais_origen="España";
    $articulos->observaciones="Lavados a la piedra";
    $articulos->seccion="Confección";

    $articulos->save();
});
Route::get("/borrar", function () {
    // $articulo=Articulo::fund(2);
    // $articulo->delete();
    Articulo::where("seccion", "Cafetería")->delete();
});
Route::get("/insertarVarios", function () {
    Articulo::create(["nombre_articulo"=>"Impresora", "precio"=>30, "pais_origen"=>"Francia", "observaciones"=>"por inyección", "seccion"=>"Informática"]);
});
Route::get("/actualizarVarios", function () {
    Articulo::where("seccion", "Cerámica")->where("pais_origen", "España")->update(["precio"=>50]);
});
