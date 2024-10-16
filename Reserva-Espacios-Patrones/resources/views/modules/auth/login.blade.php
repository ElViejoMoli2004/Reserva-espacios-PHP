<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-900 to-indigo-900 min-h-screen flex items-center justify-center">

    <div class="backdrop-blur-lg bg-white/10 p-8 rounded-xl shadow-lg max-w-md w-full border border-white/30">
        <h2 class="text-2xl font-semibold text-white text-center mb-6">Iniciar Sesión</h2>
        
        <form action="{{route('logear')}}" method="POST" id="loginForm" class="space-y-4">
            @csrf
            @method('POST')

            <!-- Cédula -->
            <div>
                <label for="cedula" class="block text-sm text-white">Cédula</label>
                <input type="text" id="cedula" name="cedula" placeholder="Cédula" 
                    class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300" required>
            </div>
            
            <!-- Contraseña -->
            <div>
                <label for="password" class="block text-sm text-white">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" 
                    class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300" required>
            </div>

            <!-- Botones -->
            <div class="flex items-center justify-center mt-4 space-x-4">
                <button type="submit" class="px-6 py-2 bg-cyan-500 text-white rounded-lg shadow-md hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-300 transition-all">
                    Iniciar sesión
                </button>
                <button type="button" class="px-6 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 transition-all"
                    onclick="window.location.href='{{route('index')}}'">
                    Cancelar
                </button>
            </div>
        </form>
        
        <!-- Link de Registro -->
        <p class="mt-4 text-center text-sm text-white">
            ¿No tienes una cuenta? <a href="{{route('registro')}}" class="text-cyan-400 hover:text-cyan-500" >Regístrate</a>
        </p>
    </div>

</body>
</html>