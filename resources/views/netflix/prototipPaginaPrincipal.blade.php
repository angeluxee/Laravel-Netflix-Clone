@extends('layout.unregistred')

@section('content')
<br>
<br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Bienvenido a Netflix</h1>
    <p class="lead">Disfruta de una amplia variedad de series, películas y más.</p>
  </div>
<br>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <a href="/login">
        <div class="card">
          <img style="height: 330px;" src="{{ asset('storage/posters/peliculas.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">PELÍCULAS</h5>
            <p class="card-text">Disfruta de más de 1000 títulos.</p>
            <a href="/login" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a href="/login">
        <div class="card">
          <img style="height: 330px;" src="{{ asset('storage/posters/series.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SERIES</h5>
            <p class="card-text">Disfruta de más de 1000 títulos.</p>
            <a href="/login" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<br>
@endsection
