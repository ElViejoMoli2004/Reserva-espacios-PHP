<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Espacio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-3xl font-bold mb-6 text-center">Crear Nuevo Espacio</h2>
            
            <form action="{{ route('crearEspacios') }}" method="POST" class="space-y-4">
                @csrf
                @method('POST')

                <div>
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre del Espacio</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Sala de conferencias 1"
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required>
                </div>
                
                <div>
                    <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Breve descripción del espacio"
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required></textarea>
                </div>

                <div>
                    <label for="capacidad" class="block text-sm font-medium text-gray-700">Capacidad</label>
                    <input type="number" id="capacidad" name="capacidad" placeholder="Número máximo de personas"
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required>
                </div>

                <div>
                    <label for="tipo_evento" class="block text-sm font-medium text-gray-700">Tipo de Evento</label>
                    <input type="text" id="tipo_evento" name="tipo_evento" placeholder="Ej. Conferencia, Taller"
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required>
                </div>

                <div>
                    <label for="ubicacion" class="block text-sm font-medium text-gray-700">Ubicación</label>
                    <input type="text" id="ubicacion" name="ubicacion" placeholder="Ej. Edificio A, Piso 2"
                        class="mt-1 px-4 py-2 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-cyan-300" required>
                </div>

                <div class="flex justify-between">
                    <button type="submit" class="mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Crear Espacio</button>
                    <a href="{{ route('indexAdministradorEventos') }}" class="mt-4 bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700">Cancelar</a>
                </div>
                
                
            </form>
        </div>
    </div>
</body>
</html>
