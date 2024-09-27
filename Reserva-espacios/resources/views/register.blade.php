<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="{{ asset('css/cssRegister.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="{{ route('registerStore') }}" method="POST" autocomplete="off">
                @csrf
                <h2>Crear cuenta</h2>
                <div class="input-row">
                    <div class="input-group">
                        <input type="text" name="primer_nombre" required autocomplete="off">
                        <label for="">Primer Nombre</label>
                    </div>
                    <div class="input-group">
                        <input type="text" name="segundo_nombre" required autocomplete="off" >
                        <label for="">Segundo Nombre</label>
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <input type="text" name="primer_apellido" required autocomplete="off">
                        <label for="">Primer Apellido</label>
                    </div>
                    <div class="input-group">
                        <input type="text" name="segundo_apellido" required autocomplete="off">
                        <label for="">Segundo Apellido</label>
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <input type="number" name="cedula" required autocomplete="off">
                        <label for="">Cédula</label>
                    </div>
                    <div class="input-group">
                        <input type="email" name="email" required autocomplete="off">
                        <label for="">Email</label>
                    </div>
                </div>
                <div class="input-row">
                    <div class="input-group">
                        <input type="password" name="password" required autocomplete="off">
                        <label for="">Password</label>
                    </div>
                    <div class="input-group">
                        <input type="number" name="telefono" required autocomplete="off">
                        <label for="">Teléfono</label>
                    </div>
                </div>
                <div class="input-group">
                    <select name="rol_id" required>
                        <option value="2">2 - Usuario</option>
                    </select>
                    <label for="">Rol ID</label>
                </div>
                <div class="button-row">
                    <button type="submit">Crear</button>
                    <button type="button" onclick="window.location.href='{{ url('/login') }}'">Cancelar</button>
                </div>
                <div class="signUp-link">
                    <p>¿Ya tienes una cuenta?<a href="{{ url('/login') }}" class="signInBtn-link">Iniciar sesión</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    
</body>
</html>
