<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cabecera">
        @yield("cabecera")
    </div>
    <div class="contenido">
        @yield("contenido")
    </div>
    <div class="pie">
        @yield("pie")
    </div>
</body>
</html>