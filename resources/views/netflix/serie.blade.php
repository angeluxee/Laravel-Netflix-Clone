@extends('layout.netflix')
@section('content')
<br>
<br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset($serie->poster)}}" class="card-img-top" alt="Imatge de la pel·lícula">
        </div>
      </div>
      <div class="col-md-8">
        <h1>{{ $serie->title }}</h1>
        <p>Director: {{ $serie->director }}</p>
        <p>Year: {{ $serie->year }}</p>
        <p>Genre: {{ $serie->genre }}</p>
        @php
            $episodesBySeason = $episodes->sortBy('season')->groupBy('season');
        @endphp
        @foreach ($episodesBySeason as $season => $episodes)
            <div class="card mb-3">
              <a href="{{ route('showSeasons', ['id' => $serie->id, 'season' => $season]) }}" style="text-decoration: none;">
                <div class="card-header bg-secondary text-white">
                    Temporada {{ $season }}
                </div>
              </a>
            </div>
        @endforeach
      </div>
    </div>
    <br>





<br>

  </div>
</div>

@endsection
