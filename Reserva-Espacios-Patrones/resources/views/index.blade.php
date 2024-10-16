<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Spaces Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <header>
        <div class="header-container">
            <h1><i class="fas fa-calendar-alt"></i> Event Spaces</h1>
            <button class="login-btn" onclick="window.location.href='{{route('login')}}'">Login</button>
        </div>
    </header>

    <div id="loginModal" class="modal">
       
    </div>

    <!-- Modal de Registro -->


    <main>
        <section class="available-spaces">
            <h2>Available Spaces</h2>
            <div class="spaces-grid">
                <div class="space-card">
                    <div class="space-image"></div>
                    <h3>Conference Room A</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Main St, Anytown USA</p>
                    <p><i class="fas fa-users"></i> Capacity: 50 people</p>
                    <button class="view-btn">View</button>
                    <button class="reserve-btn">Reserve</button>
                </div>

                <div class="space-card">
                    <div class="space-image"></div>
                    <h3>Ballroom</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 456 Oak St, Anytown USA</p>
                    <p><i class="fas fa-users"></i> Capacity: 200 people</p>
                    <button class="view-btn">View</button>
                    <button class="reserve-btn">Reserve</button>
                </div>

                <div class="space-card">
                    <div class="space-image"></div>
                    <h3>Rooftop Terrace</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 789 Elm St, Anytown USA</p>
                    <p><i class="fas fa-users"></i> Capacity: 100 people</p>
                    <button class="view-btn">View</button>
                    <button class="reserve-btn">Reserve</button>
                </div>
            </div>
        </section>

        <section class="upcoming-reservations">
            <h2>Upcoming Reservations</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Space</th>
                        <th>Customer</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023-05-15</td>
                        <td>Conference Room A</td>
                        <td>John Doe</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>2023-05-20</td>
                        <td>Ballroom</td>
                        <td>Jane Smith</td>
                        <td>Confirmed</td>
                    </tr>
                    <tr>
                        <td>2023-05-25</td>
                        <td>Rooftop Terrace</td>
                        <td>Michael Johnson</td>
                        <td>Pending</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <div class="header-container">
        <h1><i class="fas fa-calendar-alt"></i> Event Spaces</h1>
        <button class="login-btn" id="loginBtn">Login</button>
    </div>

  <script src="{{ asset('script.js') }}"></script>
</html>