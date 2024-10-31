<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0">
            <div class="p-4 text-center text-2xl font-bold">Menú Administradores</div>
            <nav class="flex flex-col p-4 space-y-4">
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Usuarios</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('indexAdministrador') }}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">
                                Usuarios
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Espacios</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('indexAdministradorEventos') }}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Espacios</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Reservas</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Reservas Actuales</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-2">Salir del sistema</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('logout') }}" class="block py-2 px-4 rounded-lg bg-red-500 hover:bg-red-600">Salir</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <main class="flex-grow p-6">
            <h1 class="text-3xl font-semibold mb-6">Espacios</h1>

            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">
                                <a href="{{ route('createAdministradorEventos') }}" class="px-6 py-2 bg-cyan-500 text-white rounded-lg shadow-md hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-300 transition-all">
                                    <i class="fa-solid fa-plus"></i> Agregar Evento
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cards de Espacios -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                    @foreach($eventos as $evento)
                    <div class="bg-white shadow-md rounded-lg p-4">
                        <h2 class="text-lg font-bold">{{ $evento->nombre }}</h2>
                        <p class="text-gray-600">{{ $evento->descripcion }}</p>
                        <p class="text-gray-600">Capacidad: {{ $evento->capacidad }}</p>
                        <p class="text-gray-600">Tipo de Evento: {{ $evento->tipo_evento }}</p>
                        <p class="text-gray-600">Ubicación: {{ $evento->ubicacion }}</p>

                        <div class="mt-4 flex justify-between">
                            <form action="{{ route('eliminarAdministradorEvento', ['id' => $evento->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas borrar este espacio?');">
                                @csrf
                                @method('DELETE')
                                <div class="flex space-x-2">
                                    <a href="{{ route('mostrarAdministradorEvento', ['id' => $evento->id]) }}" class="px-2 py-1 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition text-sm">
                                        <i class="fa-solid fa-list"></i> Mostrar
                                    </a>
                                    <a href="{{ route('editarAdministradorEvento', ['id' => $evento->id]) }}" class="px-2 py-1 bg-yellow-500 text-white rounded-lg shadow hover:bg-yellow-600 transition text-sm">
                                        <i class="fa-solid fa-pen-to-square"></i> Editar
                                    </a>
                                    <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded-lg shadow hover:bg-red-600 transition text-sm">
                                        <i class="fa-solid fa-trash"></i> Borrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Fin de Cards de Espacios -->

                <!-- Paginación -->
                <div class="mt-6">
                    {{ $eventos->links('pagination::tailwind') }}
                </div>
            </div>
        </main>
    </div>
    <script src=""></script>
</body>

</html>
