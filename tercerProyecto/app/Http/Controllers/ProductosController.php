<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Producto;
use App\Models\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "Estás en la página de inicio";
        $productos = Producto::all();
        return view ("productos.index", compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view("productos.insert");
        $producto = new Producto;
        
        $producto->nombreArticulo = $request->nombreArticulo;
        $producto->seccion = $request->seccion;
        $producto->precio = $request->precio;
        $producto->fecha = $request->fecha;
        $producto->paisOrigen = $request->paisOrigen;

        $producto->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Producto::findOrFail($id);
        return view ("productos.show", compact("producto"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view("productos.update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return view("productos.delete");
    }
}
