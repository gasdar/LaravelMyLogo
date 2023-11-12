<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tittle')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    
    @section('header')
        
        <header class="header-master">
            <h1>My Logo</h1>

            <div class="nav-master">
                <nav class="contenedor">
                    <a href="../inicio">Home</a>
                    <a href="../productos">Productos</a>
                    <a href="../ingreso">Login</a>
                </nav>
            </div>
        </header>

    @show

    <div class="contenedor main-master">
        @yield('main-vista')
    </div>

    @section('footer')
        <footer class="footer-master">

            <h2>Información Complementaria</h2>

            <div class="footer-contenedor">
                <div class="footer-info">
                    <h3>Soporte</h3>
                    <a href="#">Preguntas Frecuentes</a>
                    <a href="#">Ayuda en Línea</a>
                    <a href="#">Confianza y Seguridad</a>
                </div>
                <div class="footer-info">
                    <h3>Sobre Nosotros</h3>
                    <a href="#">Nuestra Historia</a>
                    <a href="#">Misión, Visión y Valores</a>
                    <a href="#">Carreras</a>
                    <a href="#">Política de Privacidad</a>
                    <a href="#">Terminos del Servicio</a>
                </div>
                <div class="footer-info">
                    <h3>Categorías</h3>
                    <a href="#">Hogar</a>
                    <a href="#">Electrónica</a>
                    <a href="#">Adornos</a>
                </div>
            </div>
            
        </footer>
    @show

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>