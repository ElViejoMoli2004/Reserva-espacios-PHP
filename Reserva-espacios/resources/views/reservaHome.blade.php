<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas disponible</title>
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
</head>
<body>
    <header>
        <a href="#" class="logo">ActiveLink.</a>
        <nav>
            <a href="{{ asset('home') }}">Inicio</a>
            <a href="{{ asset('reservaHome') }}">Reservas disponibles</a>
            <a href="{{ asset('login') }}">Iniciar sesion</a>
{{--             <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a> --}}
        </nav>
    </header>
    <section id="home">Reservas disponibles</section>
{{--     <section id="about">About</section>
    <section id="services">Services</section>
    <section id="portfolio">Portfolio</section>
    <section id="contact">Contact</section> --}}
    <script src="{{ asset('js/Homescript.css') }}"></script>
</body>
</html>