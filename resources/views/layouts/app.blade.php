<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de tu aplicación</title>
    <!-- Enlaces a tus estilos CSS y scripts JavaScript -->
</head>
<body>
    <header>
        <!-- Aquí va el contenido del encabezado (header) -->
        @include('partials.header')
    </header>

    <main>
        <!-- Aquí va el contenido de cada página específica -->
        @yield('content')
    </main>

    <footer>
        <!-- Aquí va el contenido del pie de página (footer) -->
        @include('partials.footer')
    </footer>

    <!-- Aquí puedes incluir scripts JavaScript al final del cuerpo -->
</body>
</html>
