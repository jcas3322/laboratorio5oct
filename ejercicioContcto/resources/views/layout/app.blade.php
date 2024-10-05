<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>

    <!-- Incluye aquí los estilos y scripts comunes -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap5.css') }}">
    <script src="{{ asset('js/bootstrap5.js') }}"></script>
    <script src="{{ asset('js/jQuery.js') }}"></script>
</head>

<body>
    <!-- Barra de navegación común o cualquier otro contenido -->
    @include('layout.navbar')

    <div class="container">
        @yield('content')
    </div>

    <!-- Sección para incluir scripts adicionales específicos -->
    @stack('scripts')
</body>

</html>
