@extends('layout.netflix')
@section('content')
    <br>
    <br>
    <div class="container">
        <h2>Lista de Películas</h2>
        <div class="row">
            <div class="col-md-6">
                <select class="form-control" id="genre">
                    <option selected value="todos">Género</option>
                    @php
                        $uniqueGenres = [];
                        foreach ($movies as $movie) {
                            $individualGenres = explode(', ', $movie->genre);
                            foreach ($individualGenres as $individualGenre) {
                                if (!in_array($individualGenre, $uniqueGenres)) {
                                    $uniqueGenres[] = $individualGenre;
                                }
                            }
                        }
                    @endphp
                    @foreach ($uniqueGenres as $genre)
                        <option value="{{ $genre }}">{{ $genre }}</option>
                    @endforeach
                </select>

            </div>
            <div class="col-md-6">
                <select class="form-control" id="year">
                    <option selected value="todos">Año</option>
                    @php
                        $uniqueYears = [];
                        foreach ($movies as $movie) {
                            $individualYears = explode(', ', $movie->year);
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
        </div>
        <br>
        <div class="row">
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
        </div>
    </div>
@endsection
