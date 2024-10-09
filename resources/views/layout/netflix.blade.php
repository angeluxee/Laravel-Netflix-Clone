<!DOCTYPE html>
<html lang="cat">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle (JS y Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-vh-100 d-flex flex-column justify-content-between">
                <nav class="navbar navbar-dark bg-dark py-3">
                    @php
                    $user = session('user');
                    @endphp
                    <div class="container d-flex flex-wrap justify-content-between align-items-center">
                      <a href="/netflix" class="nav-link d-flex align-items-center px-2 text-white">
                        <img src="{{ asset('storage/logo.png') }}" alt="Netflix logo" class="border border-white border-2" style="width: 80px; height: 80px;">
                      </a>
                      <ul class="nav col-lg-auto mb-2 mb-lg-0 me-auto">
                        <li class="nav-item">
                          <a href="/series" class="nav-link px-2 text-white">Series</a>
                        </li>
                        <li class="nav-item">
                          <a href="/movies" class="nav-link px-2 text-white">Películas</a>
                        </li>
                        <li class="nav-item">
                          <a href="/favorites" class="nav-link px-2 text-white">Favoritos</a>
                        </li>
                        @if ($user->rol === 'admin')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white bg-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Admin Menu
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="/mediaManagement" class="dropdown-item">Media</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a href="/userManagement" class="dropdown-item">Users</a></li>
                            </ul>
                        </li>
                        @endif
                      </ul>
                      <form action="{{ route('search.media') }}" method="GET" class="d-flex">
                        <input type="search" name="query" class="form-control me-2" placeholder="Busca..." aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                        <a href="/mediaFilter" class="btn btn-outline-light ms-2">Filtrar</a>
                      </form>
                      <ul class="nav col-12 col-lg-auto mb-0 justify-content-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset($user->avatar) }}" alt="User avatar" class="rounded-circle border border-white border-2" style="width: 40px; height: 40px; object-fit: cover;">
                                <span class="d-none d-lg-inline-block ps-2">{{ $user->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/profile" class="dropdown-item">Perfil</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a href="{{ route('logout') }}" class="dropdown-item">Cerrar sesión</a></li>
                            </ul>
                        </li>
                        </ul>
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
                            <li><a href="/series">Series</a></li>
                            <li><a href="/movies">Películas</a></li>
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
    <script src="/js/app.js"></script>
</body>

</html>
