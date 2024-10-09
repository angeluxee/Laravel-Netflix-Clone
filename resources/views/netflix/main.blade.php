@extends('layout.netflix')
@section('content')
    <br>
    <br>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Bienvenido a Netflix</h1>
            <p class="lead">Disfruta de una amplia variedad de series, películas y más.</p>
        </div>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="/movies">
                    <div class="card">
                        <img style="height: 330px;" src="{{ asset('storage/posters/peliculas.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PELÍCULAS</h5>
                            <p class="card-text">Disfruta de más de 1000 títulos.</p>
                            <a href="/movies" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="/series">
                    <div class="card">
                        <img style="height: 330px;" src="{{ asset('storage/posters/series.jpg') }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SERIES</h5>
                            <p class="card-text">Disfruta de más de 1000 títulos.</p>
                            <a href="/series" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="mt-5">Nuevas adiciones</h2>
        <hr>
        <br>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @php
                    $chunks = array_chunk($lastMedia->toArray(), 3);
                @endphp
                @foreach ($chunks as $key => $chunk)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="row">
                            @foreach ($chunk as $media)
                                <div class="col">
                                    <div class="card mb-3" style="height: auto; width: 300px;">
                                        <a href="{{ route('showMedia', ['id' => $media['id']]) }}"
                                            class="card-link"style="height: 400px; width: 300px;">
                                            <img src="{{ $media['poster'] }}" class="d-block mx-auto"
                                                alt="{{ $media['title'] }}" style="height: 400px; width: 300px;">
                                        </a>
                                        <div class="card-body">


                                            <h5 class="card-title">{{ $media['title'] }}</h5>
                                            <br>
                                            <h6 class="card-title">Director: {{ $media['director'] }}</h6>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
        <br>
        <hr>
        <br>
    @endsection
