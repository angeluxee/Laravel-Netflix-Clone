@extends('layout.netflix')
@section('content')
    <br>
    <br>
    <div class="container">
        <h2>Lista de Series</h2>
        <div class="row">
            <div class="col-md-6">
                <select class="form-control" id="genre">
                    <option selected value="todos">Género</option>
                    @php
                        $uniqueGenres = [];
                        foreach ($series as $serie) {
                            $individualGenres = explode(', ', $serie->genre);
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
                        foreach ($series as $serie) {
                            $individualYears = explode(', ', $serie->year);
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
