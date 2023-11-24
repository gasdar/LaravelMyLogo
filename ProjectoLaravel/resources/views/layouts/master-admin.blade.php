<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('assets/css/app2_admin.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

    @section('header')
        <header class="header">
            <div class="header-barra">
                <div class="logo degradado-admin">
                    <h1>MyLogo<span>Admin</span></h1>
                </div>

                <nav class="header-navegacion">
                    <a href="{{ url('sucursales') }}" class="link">Sucursales</a>
                    <a href="#" class="link">Productos</a>
                    <a href="{{ url('categorias') }}" class="link">Categorías</a>
                    <a href="{{ url('index') }}" class="link">Salir</a>
                </nav>
            </div>
            <div class="header-bienvenida">
                <div class="header-contenido">
                    <h2 class="degradado-admin">Bienvenido a la Interfaz de Administrador</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem est saepe possimus, porro dignissimos voluptatum mollitia blanditiis, corrupti nobis cum excepturi amet quasi? Dolorem magnam delectus, vel maiores amet eos!</p>
                </div>
                <div class="header-imagen">
                    <img src="{{ asset('assets/img/46.jpg')}}" alt="imagen de bienvenida" />
                </div>
            </div>
        </header>
    @show


    <div class="contenedor">
        @yield('main-vista')
    </div>

    @section('footer')
        <footer class="footer">
            <div class="header-barra">
                <div class="logo degradado-admin">
                    <h1>MyLogo<span>Admin</span></h1>
                </div>

                <nav class="header-navegacion">
                    <a href="{{ url('sucursales') }}" class="link">Sucursales</a>
                    <a href="#" class="link">Productos</a>
                    <a href="{{ url('categorias') }}" class="link">Categorías</a>
                    <a href="{{ url('index') }}" class="link">Salir</a>
                </nav>
            </div>
        </footer>
    @show

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0c418a5786.js" crossorigin="anonymous"></script>
</body>
</html>
