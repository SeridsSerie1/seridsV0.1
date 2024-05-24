<<<<<<< HEAD
<!-- resources/views/welcome.blade.php -->
=======

>>>>>>> 3d5c482c8d93a0bad2bfe5d3c210111356e72306
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<<<<<<< HEAD
    <body>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Registro de Usuario</h2>
    <form action="#" method="POST" class="register-form">
        <div class="form-group">
            <label for="nombre">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <button type="submit" class="register-button">Registrarse</button>
        </div>
    </form>
</div>

</body>
</html>


    </body>
</html>
=======
<body>
<header>
        <!-- Aquí va el contenido del encabezado (header) -->
        @include('partials.header')
    </header>
<div class="container">
    <h2>Registro de Usuario</h2>
    <form action="/register" method="POST" class="register-form">
    @csrf <!-- Agrega el token CSRF -->
    <div class="form-group">
        <label for="nombre">Nombre Completo</label>
        <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
    </div>

    <div class="form-group">
        <button type="submit" class="register-button">Registrarse</button>
    </div>
</form>
</div>
<footer>
        <!-- Aquí va el contenido del pie de página (footer) -->
        @include('partials.footer')
    </footer>

</body>
</html>
>>>>>>> 3d5c482c8d93a0bad2bfe5d3c210111356e72306
