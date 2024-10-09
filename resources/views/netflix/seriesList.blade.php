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
        </div>
        <br>
        <form method="POST" action="{{ route('deleteMedia') }}">
            @csrf
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
                                <input type="checkbox" name="selected_media[]" value="{{ $serie->id }}">
                                <a href="{{ route('showMediaForm', ['id' => $serie->id]) }}"
                                    class="btn btn-primary btn-sm">Editar Serie</a>
                                <a href="{{ route('showEpisodeForm', ['id' => $serie->id]) }}"
                                    class="btn btn-success btn-sm">Añadir Episodio</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-3">
                    <a href="/addMedia" class="card-link">
                        <div class="card mb-3">
                            <img src="{{ asset('storage/add_icon.png') }}" class="card-img-top" alt="Imatge de la Serie">
                            <div class="card-body">
                                <h5 class="card-title">Añadir Series</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Eliminar Series Seleccionadas</button>
        </form>
    </div>
    </div>
@endsection
