@extends('layout.unregistred')

@section('content')
<br>
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Iniciar Sesión</h2>
      <form method="POST" action="/login/userLogin">
        @csrf
        <div class="form-group">
          <label for="email">Correo Electrónico</label>
          <input type="email" class="form-control" name="email" placeholder="ejemplo@dominio.com">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" name="password" placeholder="Contraseña">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" name="remember" id="rememberCheckbox">
          <label class="form-check-label" for="rememberCheckbox">Recordarme</label>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
      </form>
      <br>
      <p>¿No tienes una cuenta? <a href="/register">Regístrate aquí</a></p>
    </div>
  </div>
</div>
@endsection
