
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
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
