<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-900 to-indigo-900 min-h-screen flex items-center justify-center">

    <div class="backdrop-blur-lg bg-white/10 p-8 rounded-xl shadow-lg max-w-xl w-full border border-white/30">
        <h2 class="text-2xl font-semibold text-white text-center mb-6">Registro</h2>
        
        <form action="{{route('crearUsuarios')}}" method="POST" id="registerForm">
          @csrf
          @method('POST')
            <!-- Grid Container -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Primer Nombre -->
                <div class="col-span-1">
                    <label for="primer_nombre" class="block text-sm text-white">Primer Nombre</label>
                    <input type="text" id="primer_nombre" name="primer_nombre" placeholder="Primer Nombre" 
                        class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300" required>
                </div>
                <!-- Segundo Nombre -->
                <div class="col-span-1">
                    <label for="segundo_nombre" class="block text-sm text-white">Segundo Nombre</label>
                    <input type="text" id="segundo_nombre" name="segundo_nombre" placeholder="Segundo Nombre" 
                        class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300">
                </div>
                <!-- Primer Apellido -->
                <div class="col-span-1">
                    <label for="primer_apellido" class="block text-sm text-white">Primer Apellido</label>
                    <input type="text" id="primer_apellido" name="primer_apellido" placeholder="Primer Apellido" 
                        class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300" required>
                </div>
                <!-- Segundo Apellido -->
                <div class="col-span-1">
                    <label for="segundo_apellido" class="block text-sm text-white">Segundo Apellido</label>
                    <input type="text" id="segundo_apellido" name="segundo_apellido" placeholder="Segundo Apellido" 
                        class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300">
                </div>
                <!-- Cédula -->
                <div class="col-span-1">
                    <label for="cedula" class="block text-sm text-white">Cédula</label>
                    <input type="number" id="cedula" name="cedula" placeholder="Cédula" 
                        class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300" required>
                </div>
                <!-- Email -->
                <div class="col-span-1">
                    <label for="email" class="block text-sm text-white">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" 
                        class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300" required>
                </div>
                <!-- Contraseña -->
                <div class="col-span-1">
                    <label for="password" class="block text-sm text-white">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" 
                        class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300" required>
                </div>
                <!-- Teléfono -->
                <div class="col-span-1">
                    <label for="telefono" class="block text-sm text-white">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" placeholder="Teléfono" 
                        class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white placeholder-gray-300" required>
                </div>
                <!-- Rol ID Selector -->
                <div class="col-span-2">
                    <label for="rol_id" class="block text-sm text-white">Rol ID</label>
                    <select id="rol_id" name="rol_id" 
                        class="mt-1 px-3 py-2 bg-white/20 backdrop-blur-md rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300 text-white">
                        <option value="" disabled selected>Seleccione un Rol</option>
                        <option class="text-black" value="2">2 - Usuario</option>
                    </select>
                </div>
            </div>

            <!-- Botones -->
            <div class="flex items-center justify-center mt-6 space-x-4">
                <button type="submit" class="px-6 py-2 bg-cyan-500 text-white rounded-lg shadow-md hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-300 transition-all">
                    Registrarse
                </button>
                <button type="button" class="px-6 py-2 bg-red-500 text-white rounded-lg shadow-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 transition-all"
                    onclick="window.location.href='{{route ('indexUsuarios')}}'">
                    Cancelar
                </button>
            </div>
        </form>
    </div>

</body>
</html>
