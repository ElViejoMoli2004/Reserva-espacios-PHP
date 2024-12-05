<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                        <li>
                            <a href="{{route('indexAdministrador')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" style="color: inherit; text-decoration: none; outline: none;">
                               Usuarios
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Gestión de Espacios -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Espacios</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{route('indexAdministradorEventos')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" style="color: inherit; text-decoration: none; outline: none;">Espacios</a>
                        </li>
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
                            <a href="{{route('logout')}}" class="block py-2 px-4 rounded-lg bg-red-500 hover:bg-red-600" style="color: inherit; text-decoration: none; outline: none;">Salir</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <!-- Contenido Principal -->
        <main class="flex-grow p-6">
            <h1 class="text-3xl font-semibold mb-6">Usuarios</h1>
            <div id="content"></div>
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body p-4">
                                <a href="{{ route('createUsuarios') }}" class="px-6 py-2 bg-cyan-500 text-white rounded-lg shadow-md hover:bg-cyan-600 focus:outline-none focus:ring-2 focus:ring-cyan-300 transition-all">
                                    <i class="fa-solid fa-plus"></i> Agregar Usuario
                                </a>
                                <br><br>
                                <div class="table-responsive">
                                    <table class="table table-sm table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Primer Nombre</th>
                                                <th>Segundo Nombre</th>
                                                <th>Primer Apellido</th>
                                                <th>Segundo Apellido</th>
                                                <th>Cédula</th>
                                                <th>Email</th>
                                                <th>Teléfono</th>
                                                <th>Rol ID</th>
                                                <th>Fecha de Creación</th>
                                                <th>Fecha de Actualización</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->primer_nombre}}</td>
                                                <td>{{$item->segundo_nombre}}</td>
                                                <td>{{$item->primer_apellido}}</td>
                                                <td>{{$item->segundo_apellido}}</td>
                                                <td>{{$item->cedula}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->telefono}}</td>
                                                <td>{{$item->rol_id}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>{{$item->updated_at}}</td>
                                                <td>
                                                    <form action="{{ route('eliminarAdministrador', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="btn-group" role="group">
                                                            <a href="{{ route('mostrarAdministrador', $item->id) }}" class="btn btn-info">
                                                                <i class="fa-solid fa-list"></i> Mostrar
                                                            </a>
                                                            <a href="{{ route('editarAdministrador', $item->id) }}" class="btn btn-warning">
                                                                <i class="fa-solid fa-pen-to-square"></i> Editar
                                                            </a>
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="fa-solid fa-trash"></i> Borrar
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr><td colspan="12">No hay datos en la tabla</td></tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end">
                                    {{$items->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src=""></script>
</body>
</html>
