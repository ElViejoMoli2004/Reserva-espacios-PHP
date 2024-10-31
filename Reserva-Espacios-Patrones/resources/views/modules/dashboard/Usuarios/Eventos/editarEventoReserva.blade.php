<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-3xl font-bold mb-6 text-center">Editar Reserva de Espacio</h2>
            
            <form action="{{ route('actualizarUsuarioReserva', ['id' => $evento->id]) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT') <!-- Cambiado a PUT para actualizar -->

                <div>
                    <input type="hidden" id="usuario_id" name="usuario_id" value="{{ $usuarioId }}" readonly
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full bg-gray-200 cursor-not-allowed" required>
                </div>

                <div>
                    <input type="hidden" id="espacio_id" name="espacio_id" value="{{ $espacioId }}" readonly
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full bg-gray-200 cursor-not-allowed" required>
                </div>

                <div>
                    <label for="fecha_inicio" class="block text-sm font-medium text-gray-700">Fecha de Inicio</label>
                    <input type="datetime-local" id="fecha_inicio" name="fecha_inicio"
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required value="{{ $fecha_inicio }}">
                </div>

                <div>
                    <label for="fecha_fin" class="block text-sm font-medium text-gray-700">Fecha de Fin</label>
                    <input type="datetime-local" id="fecha_fin" name="fecha_fin"
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required value="{{ $fecha_fin }}">
                </div>

                <div class="flex justify-between">
                    <button type="submit" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Actualizar Reserva</button>
                    <a href="{{ route('indexEventosUsuariosReserva') }}" class="mt-4 bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700">Cancelar</a>
                </div>
            </form>
            
        </div>
    </div>
</body>
</html>
