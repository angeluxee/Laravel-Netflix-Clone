@extends('layout.netflix')
@section('content')
    <br>
    <br>
    <div class="container">
        <h2>Resultado de la búsqueda para "{{ $query }}"</h2>
        <br>
        <div class="row">
            <h3>
                Peliculas
            </h3>
            @foreach ($movies as $movie)
            <div class="col-md-3 serie-card" data-genre="{{ $movie->genre }}" data-year="{{ $movie->year }}">
                <div class="card mb-3">
                    <a href="{{ route('showMedia', ['id' => $movie->id]) }}" class="card-link">
                        <img src="{{ asset($movie->poster) }}" class="card-img-top" alt="Imatge de la movie">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <br>
                        <h6 class="card-title">Director: {{ $movie->director }}</h6>
                        <h6 class="card-title">Año: {{ $movie->year }}</h6>
                        <h6 class="card-title">Género: {{ $movie->genre }}</h6>
                        <div class="col-md-3 serie-card" data-genre="{{ $movie->genre }}"
                            data-year="{{ $movie->year }}">
                            @if ($userFavs->contains($movie->id))
                                <a
                                    href="{{ route('addRemove_favorites', ['id_user' => $user->id, 'id_media' => $movie->id, 'type' => $movie->type]) }}"><img
                                        src="storage/sifav.png" class="img-fluid w-1 h-1"></a>
                            @else
                                <a
                                    href="{{ route('addRemove_favorites', ['id_user' => $user->id, 'id_media' => $movie->id, 'type' => $movie->type]) }}"><img
                                        src="storage/nofav.png" class="img-fluid w-1 h-1"></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            <h3>
                Series
            </h3>
            @foreach ($series as $serie)
            <div class="col-md-3 serie-card" data-genre="{{ $serie->genre }}" data-year="{{ $serie->year }}">
                <div class="card mb-3">
                    <a href="{{ route('showMedia', ['id' => $serie->id]) }}" class="card-link">
                        <img src="{{ asset($serie->poster) }}" class="card-img-top" alt="Imatge de la serie">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $serie->title }}</h5>
                        <br>
                        <h6 class="card-title">Director: {{ $serie->director }}</h6>
                        <h6 class="card-title">Año: {{ $serie->year }}</h6>
                        <h6 class="card-title">Genero: {{ $serie->genre }}</h6>
                        <div class="col-md-3 serie-card" data-genre="{{ $serie->genre }}"
                            data-year="{{ $serie->year }}">
                            @if ($userFavs->contains($serie->id))
                                <a
                                    href="{{ route('addRemove_favorites', ['id_user' => $user->id, 'id_media' => $serie->id, 'type' => $serie->type]) }}"><img
                                        src="storage/sifav.png" class="img-fluid w-1 h-1"></a>
                            @else
                                <a
                                    href="{{ route('addRemove_favorites', ['id_user' => $user->id, 'id_media' => $serie->id, 'type' => $serie->type]) }}"><img
                                        src="storage/nofav.png" class="img-fluid w-1 h-1"></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection
