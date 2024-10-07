@extends("../layouts.plantilla")

@section("cabecera")
@endsection

@section("contenido")
    <form method="post" action="/productos">
        <input type="text" name="nombreArticulo">
        {{ csrf_field() }}
        <input type="submit" name="enviar" value="Enviar">
    </form>
@endsection

@section("pie")
@endsection
