<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="{{ asset('css/reset-password.css') }}">
</head>
<body>

<div class="container">
    <h2>Restablecer Contraseña</h2>
    <p>Por favor, ingresa tu dirección de correo electrónico. Te enviaremos un enlace para restablecer tu contraseña.</p>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Enviar Enlace de Restablecimiento</button>
    </form>
</div>

</body>
</html>
