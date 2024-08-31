<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    <style>
        .contenedor{
            background-color: #F00;
            text-align: center;
        }
        .infoGeneral{
            background-color: #F00;
            margin: 200px;
            color: #FFF;
        }
        .pie{
            background-color: #F00;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        @yield("cabecera")
    </div>
    <div class="infoGeneral">
        @yield("infoGeneral")
    </div>
    <div calss="pie">
        @yield("pie")
        Este es el pie, que no cambia
    </div>
</body>
</html>