@extends("../layouts.plantilla")

@section("cabecera")
LEER REGISTROS
@endsection

@section("contenido")
    <table border="1">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Sección</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->nombreArticulo}}</td>
                    <td><a href="{{route('productos.edit', $producto->id)}}"> {{$producto->seccion}}</a></td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->fecha}}</td>
                    <td>{{$producto->paisOrigen}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section("pie")
@endsection
