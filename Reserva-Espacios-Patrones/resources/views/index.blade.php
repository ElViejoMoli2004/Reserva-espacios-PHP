<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Espacios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-900 to-indigo-900 min-h-screen text-white">

    <!-- Header -->
    <header class="flex justify-between items-center p-6 bg-blue-800/50 backdrop-blur-lg">
        <h1 class="text-3xl font-bold flex items-center">
            <i class="fas fa-calendar-alt mr-2"></i> Event Spaces
        </h1>
        <button class="bg-cyan-500 hover:bg-cyan-600 px-4 py-2 rounded-lg transition-all" onclick="window.location.href='{{route('login')}}'">Inicia sesión</button>
    </header>

    <main class="p-8">
        <!-- Available Spaces Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-semibold mb-6 text-center">Available Spaces</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Space Card 1 -->
                <div class="bg-white/10 p-6 rounded-lg shadow-lg">
                    <div class="space-image h-32 bg-gray-500 rounded-lg mb-4"></div>
                    <h3 class="text-xl font-bold">Conference Room A</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Main St, Anytown USA</p>
                    <p><i class="fas fa-users"></i> Capacity: 50 people</p>
                    <div class="mt-4 flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">View</button>
                        <button class="flex-1 bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg">Reserve</button>
                    </div>
                </div>
                
                <!-- Space Card 2 -->
                <div class="bg-white/10 p-6 rounded-lg shadow-lg">
                    <div class="space-image h-32 bg-gray-500 rounded-lg mb-4"></div>
                    <h3 class="text-xl font-bold">Ballroom</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 456 Oak St, Anytown USA</p>
                    <p><i class="fas fa-users"></i> Capacity: 200 people</p>
                    <div class="mt-4 flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">View</button>
                        <button class="flex-1 bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg">Reserve</button>
                    </div>
                </div>

                <!-- Space Card 3 -->
                <div class="bg-white/10 p-6 rounded-lg shadow-lg">
                    <div class="space-image h-32 bg-gray-500 rounded-lg mb-4"></div>
                    <h3 class="text-xl font-bold">Rooftop Terrace</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 789 Elm St, Anytown USA</p>
                    <p><i class="fas fa-users"></i> Capacity: 100 people</p>
                    <div class="mt-4 flex space-x-2">
                        <button class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg">View</button>
                        <button class="flex-1 bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg">Reserve</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Upcoming Reservations Section -->
        <section>
            <h2 class="text-2xl font-semibold mb-6 text-center">Upcoming Reservations</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white/10 backdrop-blur-lg rounded-lg shadow-lg">
                    <thead class="bg-blue-800/50 text-white">
                        <tr>
                            <th class="p-4 text-left">Date</th>
                            <th class="p-4 text-left">Space</th>
                            <th class="p-4 text-left">Customer</th>
                            <th class="p-4 text-left">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-700">
                            <td class="p-4">2023-05-15</td>
                            <td class="p-4">Conference Room A</td>
                            <td class="p-4">John Doe</td>
                            <td class="p-4">Pending</td>
                        </tr>
                        <tr class="border-b border-gray-700">
                            <td class="p-4">2023-05-20</td>
                            <td class="p-4">Ballroom</td>
                            <td class="p-4">Jane Smith</td>
                            <td class="p-4">Confirmed</td>
                        </tr>
                        <tr>
                            <td class="p-4">2023-05-25</td>
                            <td class="p-4">Rooftop Terrace</td>
                            <td class="p-4">Michael Johnson</td>
                            <td class="p-4">Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>