<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="{{ asset('css/cssPasswordRequest.css') }}">
</head>
<body>
    <div class="password-request-container">
        <h2>Recuperar Contraseña</h2>
        <form action="{{ route('passwordEmail') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-buttons">
                <button type="submit">Recuperar</button>
                <button type="button" class="cancel-button" onclick="window.location='{{ url('/login') }}'">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>