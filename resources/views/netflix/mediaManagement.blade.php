@extends('layout.netflix')
@section('content')
  <br>
  <div class="accordion" id="accordionMovies">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingMovies">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMovies" aria-expanded="true" aria-controls="collapseMovies">
          Películas
        </button>
      </h2>
      <div id="collapseMovies" class="accordion-collapse collapse show" aria-labelledby="headingMovies" data-bs-parent="#accordionMovies">
        <div class="accordion-body">
          <a href="/addMedia" class="btn btn-success mb-3">Añadir Película</a>
          @foreach ($movies as $movie)
            <div class="container mt-3">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="{{$movie->poster}}" alt="El Padrino" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-circle me-2">
                    <a href="#" class="badge bg-danger ms-2 text-decoration-none me-3" style="line-height: 20px;">id = {{$movie->id}}</a>
                    <a href="#" class="text-decoration-none">{{$movie->title}}</a>
                  </div>
                  <div class="ms-auto">
                    <a href="{{ route('showMediaForm', ['id' => $movie->id]) }}" class="btn btn-primary me-2">Editar</a>
                    <a href="{{ route('removeMedia', ['id' => $movie->id]) }}" class="btn btn-danger">Eliminar</a>
                  </div>
                </li>
              </ul>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="accordion" id="accordionSeries">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingSeries">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeries" aria-expanded="false" aria-controls="collapseSeries">
          Series
        </button>
      </h2>
      <div id="collapseSeries" class="accordion-collapse collapse" aria-labelledby="headingSeries" data-bs-parent="#accordionSeries">
        <div class="accordion-body">
          <a href="/addMedia" class="btn btn-success mb-3">Añadir Serie</a>
          @foreach ($series as $serie)
            <div class="container mt-3">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img src="{{$serie->poster}}" alt="El Padrino" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-circle me-2">
                    <a href="#" class="badge bg-danger ms-2 text-decoration-none me-3" style="line-height: 20px;">id = {{$serie->id}}</a>
                    <a href="#" class="text-decoration-none">{{$serie->title}}</a>
                  </div>
                  <div class="ms-auto">
                    <a href="#" class="btn btn-success me-2">Añadir Episodio</a>
                    <a href="{{ route('showMediaForm', ['id' => $serie->id]) }}" class="btn btn-primary me-2">Editar</a>
                    <a href="{{ route('removeMedia', ['id' => $serie->id]) }}" class="btn btn-danger">Eliminar</a>
                  </div>
                </li>
              </ul>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
