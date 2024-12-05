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
            <div class="p-4 text-center text-2xl font-bold">Menú Usuarios</div>
            <nav class="flex flex-col p-4 space-y-4">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Espacios</h3>
                    <ul class="space-y-2">
                        <li><a href="{{route('indexEventosUsuariosReserva')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Espacios</a></li>
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
        <main class="flex-grow flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-7xl font-semibold mb-6">Bienvenido al Sistema</h1>
                <div id="content"></div>
            </div>
        </main>

    </div>
    <script src=""></script>
</body>
</html>
