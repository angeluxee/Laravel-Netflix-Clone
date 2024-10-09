@extends('layout.netflix')
@section('content')
<br>
<br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{ $serie->title }}</h1>
        <p>Temporada: {{ $season }}</p>
        <p>Episodio: {{ $foundEpisode->number }}</p>
        <video width="100%" controls>
        <source src="{{ asset($foundEpisode->file) }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>
</div>
<br>
@endsection
