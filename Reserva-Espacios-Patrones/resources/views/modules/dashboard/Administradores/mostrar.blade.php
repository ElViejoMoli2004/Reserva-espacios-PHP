<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
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
            <div class="p-4 text-center text-2xl font-bold">Menú</div>
            <nav class="flex flex-col p-4 space-y-4">

                <!-- Gestión de Usuarios -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Usuarios</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{route('indexAdministrador')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" style="color: inherit; text-decoration: none;">
                               Usuarios
                            </a>
                         </li>

{{--                         <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Modificar Usuarios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Eliminar Usuarios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Historial de Actividades</a></li> --}}
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-2">Gestión de Espacios</h3>
                    <ul class="space-y-2">
                        <li><a href="{{route('indexAdministradorEventos')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" >Espacios</a></li>
{{--                         <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('modificar')">Modificar Espacios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('eliminar')">Eliminar Espacios</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700" onclick="event.preventDefault(); loadForm('visualizar')">Visualización de Espacios</a></li> --}}
                    </ul>
                </div>



                <div>
                    <h3 class="text-lg font-semibold mb-2">Acciones</h3>
                    <ul class="space-y-2">
                        <li><a href="{{route('indexLog')}}" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Ver Acciones</a></li>
{{--                         <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Modificar Reservas</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Cancelar Reservas</a></li>
                        <li><a href="#" class="block py-2 px-4 rounded-lg bg-gray-800 hover:bg-gray-700">Notificaciones</a></li>
                    </ul> --}}
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
            <div id="content"></div>
            <!-- Aquí puedes agregar el contenido dinámico para cada sección -->
            <div class="container mt-4">
                    <h1 class="fw-bold" style="font-size: 2.5rem;">Mostrando la información de: {{$item->primer_nombre}}</h1>
                    <br>
                <div class="row">
                  <div class="col">
                      <div class="card">
                          <div class="card-body">
                            <table class="table table-sm text-center">
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
                              </thead>
                              <tbody>
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
                                </tr>
                              </tbody>
                            </table>
                            <a href="{{route('indexAdministrador')}}" class="btn btn-danger mt-4">Cancelar</a>
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
