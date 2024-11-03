@extends("../layouts.plantilla")

@section("cabecera")
INSERTAR REGISTROS
@endsection

@section("contenido")
<form method="post" action="/productos">
    <table>
        <tr>
            <td>Nombre: </td>
            <td>
                <input type="text" name="nombreArticulo">
                {{ csrf_field() }}
            </td>
        </tr>
        <tr>
            <td>Sección: </td>
            <td>
                <input type="text" name="seccion">
            </td>
        </tr>
        <tr>
            <td>Precio: </td>
            <td>
                <input type="text" name="precio">
            </td>
        </tr>
        <tr>
            <td>Fecha: </td>
            <td>
                <input type="text" name="fecha">
            </td>
        </tr>
        <tr>
            <td>País de origen: </td>
            <td>
                <input type="text" name="paisOrigen">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="enviar" value="Enviar">
            </td>
            <td>
                <input type="reset" name="borrar" value="Borrar">
            </td>
        </tr>
    </table>
</form>

@if(count($errors) > 0)
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif

@endsection

@section("pie")
@endsection