@extends('layout.netflix')

@section('content')
    <br>
    <br>
    <div class="container">
        <h2>Resultado de la búsqueda para "{{ $query }}"</h2>
        <div class="row">
            <form method="GET" action="{{ route('media.filter') }}" class="p-4 bg-light rounded">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Buscar por título">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="start_year" class="form-label">Año de Inicio</label>
                        <select class="form-control" id="start_year" name="start_year">
                            <option selected value="todos">Año de Inicio</option>
                            @php
                                $uniqueYears = [];
                                foreach ($medias as $media) {
                                    $individualYears = explode(', ', $media->year);
                                    foreach ($individualYears as $individualYear) {
                                        if (!in_array($individualYear, $uniqueYears)) {
                                            $uniqueYears[] = $individualYear;
                                        }
                                    }
                                }
                                rsort($uniqueYears);
                            @endphp
                            @foreach ($uniqueYears as $year)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="end_year" class="form-label">Año de Fin</label>
                        <select class="form-control" id="end_year" name="end_year">
                            <option selected value="todos">Año de Fin</option>
                            @foreach ($uniqueYears as $year)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Géneros</label>
                    <div class="form-check">
                        @php
                            $uniqueGenres = [];
                            foreach ($medias as $media) {
                                $individualGenres = explode(', ', $media->genre);
                                foreach ($individualGenres as $individualGenre) {
                                    if (!in_array($individualGenre, $uniqueGenres)) {
                                        $uniqueGenres[] = $individualGenre;
                                    }
                                }
                            }
                        @endphp
                        @foreach ($uniqueGenres as $genre)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="genre_{{ $genre }}" name="genres[]" value="{{ $genre }}">
                                <label class="form-check-label" for="genre_{{ $genre }}">{{ $genre }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Actores</label>
                    <div class="form-check">
                        @php
                            $uniqueActors = [];
                            foreach ($medias as $media) {
                                $individualActors = explode(', ', $media->cast);
                                foreach ($individualActors as $individualActor) {
                                    if (!in_array($individualActor, $uniqueActors)) {
                                        $uniqueActors[] = $individualActor;
                                    }
                                }
                            }
                        @endphp
                        @foreach ($uniqueActors as $actor)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cast_{{ $actor }}" name="cast[]" value="{{ $actor }}">
                                <label class="form-check-label" for="cast_{{ $actor }}">{{ $actor }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Duración</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="duration_less_1h" name="duration" value="less_1h">
                        <label class="form-check-label" for="duration_less_1h">Menos de 1h</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="duration_1h_2h" name="duration" value="1h_2h">
                        <label class="form-check-label" for="duration_1h_2h">Entre 1h y 2h</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="duration_more_2h" name="duration" value="more_2h">
                        <label class="form-check-label" for="duration_more_2h">Más de 2h</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
        </div>
        <br>
        <div class="row">
            <h1>Películas</h1>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-md-3 serie-card" data-genre="{{ $movie->genre }}" data-year="{{ $movie->year }}">
                        <div class="card mb-3">
                            <a href="{{ route('showMedia', ['id' => $movie->id]) }}" class="card-link">
                                <img src="{{ asset($movie->poster) }}" class="card-img-top" alt="Imatge de la movie">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Director: {{ $movie->director }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Año: {{ $movie->year }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Género: {{ $movie->genre }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Duración: {{ $movie->duration }} min</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Actores: {{ $movie->cast }}</h6>
                                <div class="col-md-3 serie-card" data-genre="{{ $movie->genre }}" data-year="{{ $movie->year }}">
                                    @if ($userFavs->contains($movie->id))
                                        <a href="{{ route('addRemove_favorites', ['id_user' => $user->id, 'id_media' => $movie->id, 'type' => $movie->type]) }}"><img src="{{ asset('storage/sifav.png') }}" class="img-fluid w-1 h-1"></a>
                                    @else
                                        <a href="{{ route('addRemove_favorites', ['id_user' => $user->id, 'id_media' => $movie->id, 'type' => $movie->type]) }}"><img src="{{ asset('storage/nofav.png') }}" class="img-fluid w-1 h-1"></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <br>
            <br>
            <hr>
            <h1>Series</h1>
            <div class="row">
                @foreach ($series as $serie)
                    <div class="col-md-3 serie-card" data-genre="{{ $serie->genre }}" data-year="{{ $serie->year }}">
                        <div class="card mb-3">
                            <a href="{{ route('showMedia', ['id' => $serie->id]) }}" class="card-link">
                                <img src="{{ asset($serie->poster) }}" class="card-img-top" alt="Imatge de la serie">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ $serie->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Director: {{ $serie->director }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Año: {{ $serie->year }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Género: {{ $serie->genre }}</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Duración: {{ $serie->duration }} min</h6>
                                <h6 class="card-subtitle mb-2 text-muted">Actores: {{ $serie->cast }}</h6>
                                <div class="col-md-3 serie-card" data-genre="{{ $serie->genre }}" data-year="{{ $serie->year }}">
                                    @if ($userFavs->contains($serie->id))
                                        <a href="{{ route('addRemove_favorites', ['id_user' => $user->id, 'id_media' => $serie->id, 'type' => $serie->type]) }}"><img src="{{ asset('storage/sifav.png') }}" class="img-fluid w-1 h-1"></a>
                                    @else
                                        <a href="{{ route('addRemove_favorites', ['id_user' => $user->id, 'id_media' => $serie->id, 'type' => $serie->type]) }}"><img src="{{ asset('storage/nofav.png') }}" class="img-fluid w-1 h-1"></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection
