<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="body-login">

    <div class="div-login">
        <h1>Inicio de Sesion</h1>

        <form class="form-login" method="post" action="{{ url('login/verificar') }}">
            @csrf

            <div class="login-name">
                <label for="nombre" class="form-label">Nombre de usuario: </label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}">
            </div>
            <div class="login-contrasena">
                <label for="contrasena" class="form-label">Contraseña: </label>
                <input type="password" class="form-control" name="contrasena" id="contrasena"
                    value="{{ old('contrasena') }}">
            </div>

            <div class="button-login">
                <button type="submit" class="btn-default-3">Iniciar</button>
                <a href=" {{ url('index') }} " class="btn-default-3">Volver</a>
            </div>

            @if ($errors->any())
                <div class="error-login alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
