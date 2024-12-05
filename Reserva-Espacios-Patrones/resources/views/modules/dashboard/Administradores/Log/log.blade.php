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
                    </ul>
                </div>

                <!-- Gestión de Espacios -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Espacios</h3>
                    <ul class="space-y-2">
                        <li><a href="{{route('indexAdministradorEventos')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Espacios</a></li>
                    </ul>
                </div>

                <!-- Gestión de Reservas -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Acciones</h3>
                    <ul class="space-y-2">
                        <li><a href="{{route('indexLog')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Acciones</a></li>
                    </ul>
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
        <main class="flex-grow flex flex-col">
            <div class="text-center w-full p-8">
                <h1 class="text-3xl font-semibold mb-6">Historial de Acciones</h1>
            </div>

            <!-- Tabla de Logs -->
            <div class="w-full p-8">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Usuario</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Acción</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logs as $log)
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $log->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $log->usuario ? $log->usuario->primer_nombre . ' ' . $log->usuario->primer_apellido : 'Desconocido' }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $log->accion }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $log->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $logs->links() }}
                </div>
            </div>
        </main>
    </div>
</body>
</html>
