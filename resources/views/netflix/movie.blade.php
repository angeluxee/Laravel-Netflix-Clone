@extends('layout.netflix')
@section('content')
<br>
<br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset($movie->poster)}}" class="card-img-top" alt="Imatge de la pel·lícula">
        </div>
      </div>
      <div class="col-md-8">
        <h1>{{ $movie->title }}</h1>
        <p>Director: {{ $movie->director }}</p>
        <p>Year: {{ $movie->year }}</p>
        <p>Genre: {{ $movie->genre }}</p>
        @if ($movie->file)
        <video width="100%" controls>
          <source src="{{ asset($movie->file) }}" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        @endif
      </div>
    </div>
  </div>
</div>
<br>
@endsection
