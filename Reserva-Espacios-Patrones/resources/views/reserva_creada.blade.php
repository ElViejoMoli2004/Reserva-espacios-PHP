<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Creada</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white rounded-lg shadow-lg p-6 w-96">
        <h1 class="text-2xl font-bold text-green-500 mb-4">Reserva Creada</h1>
        <p class="text-lg text-gray-700 font-semibold">¡Hola!</p>
        <p class="text-gray-600">Tu reserva ha sido creada exitosamente.</p>
        <p class="mt-2"><strong class="text-gray-800">Fecha de Inicio:</strong> {{ $fechaInicio }}</p>
        <p><strong class="text-gray-800">Fecha de Fin:</strong> {{ $fechaFin }}</p>
        <div class="mt-4 text-center">
            <a href="{{ route('indexEventosUsuariosReserva') }}" class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200">OK</a>
        </div>
        <div class="mt-4 text-center text-gray-500 text-sm">
            Gracias por usar nuestro servicio.
        </div>
    </div>
</body>
</html>
