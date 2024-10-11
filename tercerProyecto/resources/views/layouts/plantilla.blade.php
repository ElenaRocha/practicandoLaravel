<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla para formulario</title>
    <style>
        .imagenCabecera {
            float: right;
            padding-right: 150px;
            width: 50px;
        }
        .cabecera {
            text-align: center;
            font-size: x-large;
            font-family: Tahoma, Geneva, sans-serif;
            margin: 50px 0;
            color: DodgerBlue;
        }
    </style>
</head>
<body>
    <div class="cabecera">
        @yield("cabecera")
        <img src="/images/logo.png" alt="icono de tienda" class="imagenCabecera">
    </div>
    <div class="contenido">
        @yield("contenido")
    </div>
    <div class="pie">
        @yield("pie")
    </div>
</body>
</html>