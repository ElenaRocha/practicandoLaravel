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
        .contenido form, table {
            width: 500px;
            margin: 0 auto;
        }
        .contenido form input {
            margin: 10px;
        }
        .pie {
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 1em;
            margin-bottom: 15px;
            margin-left: 15px;
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
        ElenaRocha.S.L 2024
    </div>
</body>
</html>