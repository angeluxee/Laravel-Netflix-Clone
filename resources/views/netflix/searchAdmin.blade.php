@extends('layout.netflix')
@section('content')
    <br>
    <br>
    <div class="container">
        <h2>Resultado de la búsqueda para "{{ $query }}"</h2>
        <div class="row">
            <div class="col-md-6">
                <select class="form-control" id="genre">
                    <option selected value="todos">Gènere</option>
                    <option value="Acción">Acció</option>
                    <option value="Comedia">Comèdia</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-control" id="year">
                    <option selected value="todos">Año</option>
                    @for ($i = 1980; $i <= 2024; $i++)
                        <option>{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <h3>
                Peliculas
            </h3>
            @foreach ($movies as $movie)
                <div class="col-md-3 movie-card" data-genre="{{ $movie->genre }}" data-year="{{ $movie->year }}">
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
                                class="btn btn-primary btn-sm">Editar pel·licula</a>
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
                            <h6 class="card-title">Year: {{ $serie->year }}</h6>
                            <h6 class="card-title">Genre: {{ $serie->genre }}</h6>
                            <input type="checkbox" name="selected_media[]" value="{{ $serie->id }}">
                            <a href="{{ route('showMediaForm', ['id' => $serie->id]) }}"
                                class="btn btn-primary btn-sm">Editar Serie</a>
                            <a href="{{ route('showEpisodeForm', ['id' => $serie->id]) }}"
                                class="btn btn-success btn-sm">Añadir Episodio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
