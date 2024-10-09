@extends('layout.netflix')
@section('content')
<br>
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2>Titulo</h2>
      <div class="text-center">
        <img src="https://via.placeholder.com/1920x1080" alt="Imagen de ejemplo" class="img-fluid">
      </div>
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2>Informació sobre la Pel·lícula o Sèrie</h2>
      <p>Títol: Exemple</p>
      <p>Any de Llançament: 2022</p>
      <p>Descripció: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel suscipit justo. Integer sodales lorem non ipsum ullamcorper, ut tristique elit eleifend.</p>
    </div>
  </div>
  <br>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h2>Subtítols i Doblajos</h2>
      <select id="subtitlesSelect" class="form-control">
        <option value="none" selected>Sense subtítols</option>
        <option value="english">Anglès</option>
        <option value="spanish">Espanyol</option>
      </select>
    </div>
  </div>
</div>
@endsection
