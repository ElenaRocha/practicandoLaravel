@extends("../layouts.plantilla")

@section("cabecera")
EDITAR PRODUCTO
@endsection

@section("contenido")
    <form method="post" action="/productos">
        <table>
            <tr>
                <td>Nombre: </td>
                <td>
                    <input type="text" name="nombreArticulo" value="{{$producto->nombreArticulo}}">
                    {{ csrf_field() }}
                </td>
            </tr>
            <tr>
                <td>Sección: </td>
                <td>
                    <input type="text" name="seccion" value="{{$producto->seccion}}">
                </td>
            </tr>
            <tr>
                <td>Precio: </td>
                <td>
                    <input type="text" name="precio" value="{{$producto->precio}}">
                </td>
            </tr>
            <tr>
                <td>Fecha: </td>
                <td>
                    <input type="text" name="fecha" value="{{$producto->fecha}}">
                </td>
            </tr>
            <tr>
                <td>País de origen: </td>
                <td>
                    <input type="text" name="paisOrigen" value="{{$producto->paisOrigen}}">
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
@endsection

@section("pie")
@endsection
