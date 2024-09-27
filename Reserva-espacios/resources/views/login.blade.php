<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/Login.css') }}">
</head>
<body>
  <div class="wrapper">
    <div class="form-wrapper sign-in">
      <form action="{{ route('login') }}" method="POST" autocomplete="off">
        @csrf
        <h2>Iniciar sesión</h2>
        <div class="input-group">
          <input type="number" name="email" required autocomplete="off">
          <label for="">Cédula</label>
        </div>
        <div class="input-group">
          <input type="password" name="password" required autocomplete="off">
          <label for="">Contraseña</label>
        </div>
        <div class="button-group">
          <button type="submit">Iniciar sesión</button>
          <button type="button" onclick="window.location.href='{{ url('/') }}'">Cancelar</button>
        </div>
        <div class="signUp-link">
          <p>¿No tienes una cuenta?<a href="{{ url('/register') }}" class="signUpBtn-link"> Regístrate</a></p>
        </div>
      </form>
    </div>
  </div>
  
</body>
</html>
