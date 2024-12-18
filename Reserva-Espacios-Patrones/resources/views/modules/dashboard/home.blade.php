<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Layout Principal -->
    <div class="flex min-h-screen">

        <!-- Menú Desplegable -->
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0">
            <div class="p-4 text-center text-2xl font-bold">Menú Administradores</div>
            <nav class="flex flex-col p-4 space-y-4">

                <!-- Gestión de Usuarios -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Usuarios</h3>
                    <ul class="space-y-2">
                        <li><a href="{{route('indexAdministrador')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Usuarios</a></li>
{{--                         <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Modificar Usuarios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Eliminar Usuarios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Historial de Actividades</a></li> --}}
                    </ul>
                </div>


                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Espacios</h3>
                    <ul class="space-y-2">
                        <li><a href="{{route('indexAdministradorEventos')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Espacios</a></li>
{{--                         <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('modificar')">Modificar Espacios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('eliminar')">Eliminar Espacios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('visualizar')">Visualización de Espacios</a></li> --}}
                    </ul>
                </div>


                <!-- Gestión de Reservas -->


                <div>
                    <h3 class="text-lg font-semibold mb-2">Acciones</h3>
                    <ul class="space-y-2">
                        <li><a href="{{route('indexLog')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Acciones</a></li>
{{--                         <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Modificar Reservas</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Cancelar Reservas</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Notificaciones</a></li>
                    </ul> --}}
                </div>



                <!-- Salir del sistema -->

                <div>
                  <h3 class="text-lg font-semibold mb-2">Salir del sistema</h3>
                  <ul class="space-y-2">
                    <li>
                      <a href="{{route('logout')}}" class="block py-2 px-4 rounded-lg bg-red-500 hover:bg-red-600">Salir</a>
                  </li>
                  </ul>
                </div>
            </nav>
        </aside>

        <!-- Contenido Principal -->
        <main class="flex-grow flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-7xl font-semibold mb-6">Bienvenido, {{$usuario->primer_nombre}} al Sistema</h1>
                <div id="content"></div>
                <!-- Aquí puedes agregar el contenido dinámico para cada sección -->
            </div>
        </main>


    </div>
    <script src=""></script>
</body>
</html>
