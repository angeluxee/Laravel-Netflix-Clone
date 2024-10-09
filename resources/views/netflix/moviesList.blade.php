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
        <form method="POST" action="{{ route('deleteMedia') }}">
            @csrf
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-md-3 serie-card" data-genre="{{ $movie->genre }}" data-year="{{ $movie->year }}">
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
                                <input type="checkbox" name="selected_media[]" value="{{ $movie->id }}">
                                <a href="{{ route('showMediaForm', ['id' => $movie->id]) }}"
                                    class="btn btn-primary btn-sm">Editar Película</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-3">
                    <a href="/addMedia" class="card-link">
                        <div class="card mb-3">
                            <img src="{{ asset('storage/add_icon.png') }}" class="card-img-top"
                                alt="Imatge de la pel·lícula">
                            <div class="card-body">
                                <h5 class="card-title">Añadir pel·licules</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Eliminar Películas Seleccionadas</button>
        </form>
    </div>
    </div>
@endsection
