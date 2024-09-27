<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Espacios</title>
    <link rel="stylesheet" href="{{ asset('css/cssIndex.css') }}">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="#">Reserva de Espacios</a>
        </div>
        <div class="login">
            <a href="{{ route('login') }}">Iniciar sesión</a>
        </div>
    </div>

    <div class="search-bar">
        <input type="text" placeholder="Buscar espacios...">
    </div>

    <div class="spaces">
        <div class="space">Espacio 1</div>
        <div class="space">Espacio 2</div>
        <div class="space">Espacio 3</div>
        <div class="space">Espacio 4</div>
        <!-- Añadir más espacios según sea necesario -->
    </div>
</body>
</html>