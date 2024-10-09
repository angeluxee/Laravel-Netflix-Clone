<!DOCTYPE html>
<html lang="cat">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="resources/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="min-vh-100 d-flex flex-column 
                justify-content-between">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class=" mt-2 mb-2 container d-flex flex-wrap justify-content-between align-items-center">
                <a href="/" class="nav-link d-flex align-items-center px-2 text-white">
                    <img src="{{ asset('storage/logo.png') }}" alt="Netflix logo" class="border border-white border-2"
                        style="width: 80px; height: 80px;">
                </a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="/login" class="nav-link btn btn-outline-light text-white me-2">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link btn btn-warning text-white me-2">Sign-up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <main class="container">
            @yield('content')
        </main>
        <br>
        <br>
        <footer class="footer bg-dark text-light">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Enlaces</h5>
                        <ul class="list-unstyled">
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/">Series</a></li>
                            <li><a href="/">Películas</a></li>
                            <li><a href="/">Novedades</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5>Acerca de Nosotros</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Contáctanos</h5>
                        <p>Correo: info@netflix.com</p>
                        <p>Teléfono: 123-456-789</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Síguenos</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Instagram</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <p class="text-center">© 2024 Netflix, Inc.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
