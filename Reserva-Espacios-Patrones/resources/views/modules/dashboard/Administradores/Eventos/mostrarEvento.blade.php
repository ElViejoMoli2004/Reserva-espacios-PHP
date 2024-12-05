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
    <style>
        /* Evitar el subrayado en enlaces */
        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="flex min-h-screen">

        <aside class="w-64 bg-gray-900 text-white flex-shrink-0 border-r border-gray-700">
            <div class="p-4 text-center text-2xl font-bold">Menú</div>
            <nav class="flex flex-col p-4 space-y-4">

                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Usuarios</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{route('indexAdministrador')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">
                               Usuarios
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Espacios</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{route('indexAdministradorEventos')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Espacios</a>
                        </li>
                    </ul>
                </div>


                <div>
                    <h3 class="text-lg font-semibold mb-2">Acciones</h3>
                    <ul class="space-y-2">
                        <li><a href="{{route('indexLog')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Acciones</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-2">Salir del sistema</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="block py-2 px-4 rounded-lg bg-red-500 hover:bg-red-600" onclick="event.preventDefault(); logout()">Salir</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <main class="flex-grow p-6">
            <div id="content"></div>
            <div class="container mt-4">
                <h1 class="fw-bold" style="font-size: 2.5rem;">Mostrando la información del Evento: {{$evento->nombre}}</h1>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-sm text-center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Capacidad</th>
                                            <th>Tipo evento</th>
                                            <th>Ubicacion</th>
                                            <th>Fecha de creacion</th>
                                            <th>Fecha Actualizacion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$evento->id}}</td>
                                            <td>{{$evento->nombre}}</td>
                                            <td>{{$evento->descripcion}}</td>
                                            <td>{{$evento->capacidad}}</td>
                                            <td>{{$evento->tipo_evento}}</td>
                                            <td>{{$evento->ubicacion}}</td>
                                            <td>{{$evento->created_at}}</td>
                                            <td>{{$evento->updated_at}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{route('indexAdministradorEventos')}}" class="btn btn-danger mt-4">Cancelar</a>
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
