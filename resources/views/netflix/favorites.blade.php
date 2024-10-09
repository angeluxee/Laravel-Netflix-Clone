@extends('layout.netflix')
@section('content')
<br>
<br>
    @if(count($movies) == 0 && count($series) == 0)
        <h1>Todavía no has añadido ningún contenido a favoritos</h1>
    @else
    <div class="container">
            <h2>Peliculas Favoritas</h2>
            <br>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <a href="{{ route('showMedia', ['id' => $movie->id]) }}" class="card-link">
                                <img src="{{ asset($movie->poster) }}" class="card-img-top" alt="Imatge de la pel·lícula">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <br>
                                <h6 class="card-title">Director: {{ $movie->director }}</h6>
                                <h6 class="card-title">Year: {{ $movie->year }}</h6>
                                <h6 class="card-title">Genre: {{ $movie->genre }}</h6>
                                <div class="icon-wrapper" id="icon-wrapper-{{ $movie->id }} {{ $movie->title }}">
                                <a href="{{ route('remove_favorites', ['id_user' => $user->id, 'id_media' => $movie->id, 'type' => $movie->type])}}" class="btn btn-danger btn-sm">Eliminar</a>                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    <br>
    <br>
    <div class="container">
        <h2>Series Favoritas</h2>
        <br>
        <div class="row">
            @foreach ($series as $serie)
                <div class="col-md-3">
                    <div class="card mb-3">
                        <a href="{{ route('showMedia', ['id' => $serie->id]) }}" class="card-link">
                            <img src="{{ asset($serie->poster) }}" class="card-img-top" alt="Imatge de la pel·lícula">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $serie->title }}</h5>
                            <br>
                            <h6 class="card-title">Director: {{ $serie->director }}</h6>
                            <h6 class="card-title">Year: {{ $serie->year }}</h6>
                            <h6 class="card-title">Genre: {{ $serie->genre }}</h6>
                            <div class="icon-wrapper" id="icon-wrapper-{{ $serie->id }} {{ $serie->title }}">
                            <a href="{{ route('remove_favorites', ['id_user' => $user->id, 'id_media' => $serie->id, 'type' => $serie->type])}}" class="btn btn-danger btn-sm">Eliminar</a>                                </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif
@endsection
