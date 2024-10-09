<!DOCTYPE html>
<html lang="cat">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="min-vh-100 d-flex flex-column 
                justify-content-between">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/netflix"><img style="max-width: 80px; border-radius:10px;"
                        src="https://phantom-elmundo.unidadeditorial.es/6d2ab9c4c21765712a57f5dbd000a878/crop/130x0/1855x1150/resize/414/f/jpg/assets/multimedia/imagenes/2020/06/24/15930194372255.jpg"
                        alt="Login img"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/series">Series</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/movies">Películas</a>
                        </li>
                    </ul>
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">
                                Login
                            </a>
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
                            <li><a href="/movies">Series</a></li>
                            <li><a href="/series">Películas</a></li>
                            <li><a href="/netflix">Novedades</a></li>
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
