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
            <div class="p-4 text-center text-2xl font-bold">Menú</div>
            <nav class="flex flex-col p-4 space-y-4">

                <!-- Gestión de Usuarios -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Usuarios</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Agregar Usuarios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Modificar Usuarios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Eliminar Usuarios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Historial de Actividades</a></li>
                    </ul>
                </div>

                <!-- Gestión de Eventos -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Eventos</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Crear Eventos</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Modificar Eventos</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Eliminar Eventos</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Eventos Programados</a></li>
                    </ul>
                </div>

                <!-- Gestión de Reservas -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Reservas</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Reservas Actuales</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Modificar Reservas</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Cancelar Reservas</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Notificaciones</a></li>
                    </ul>
                </div>

                <!-- Gestión de Espacios -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Espacios</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('crear')">Crear Espacios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('modificar')">Modificar Espacios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('eliminar')">Eliminar Espacios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('visualizar')">Visualización de Espacios</a></li>
                    </ul>
                </div>

                <!-- Estadísticas y Reportes -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Estadísticas y Reportes</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Informes de Uso</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Análisis de Tendencias</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Feedback de Usuarios</a></li>
                    </ul>
                </div>

                <!-- Gestión de Permisos y Roles -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Permisos y Roles</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Definir Roles</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Configuración de Permisos</a></li>
                    </ul>
                </div>

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
        <main class="flex-grow p-6">
            <h1 class="text-3xl font-semibold mb-6">Panel de Gestión</h1>
            <div id="content"></div>
            <!-- Aquí puedes agregar el contenido dinámico para cada sección -->
        </main>
    </div>
    <script src="crud.js"></script>
</body>
</html>
