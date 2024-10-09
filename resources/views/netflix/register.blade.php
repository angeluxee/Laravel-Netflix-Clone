@extends('layout.unregistred')

@section('content')
<br>
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Formulario de Registro</h2>
      <form method="POST" action="/register/userCreate">
        @csrf
        <div class="form-group">
          <label for="username">Nombre de usuario</label>
          <input type="text" class="form-control" name="username" placeholder="Nombre de usuario">
        </div>
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" name="name" placeholder="Nombre">
        </div>
        <div class="form-group">
          <label for="surname">Apellido</label>
          <input type="text" class="form-control" name="surname" placeholder="Apellido">
        </div>
        <div class="form-group">
          <label for="email">Correo Electrónico</label>
          <input type="email" class="form-control" name="email" placeholder="ejemplo@dominio.com">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" name="password" placeholder="Contraseña">
        </div>
        <div class="form-group">
          <label for="dob">Fecha de Nacimiento</label>
          <input type="date" class="form-control" name="dob">
        </div>
        <div class="form-group">
          <label for="phoneNumber">Número de teléfono</label>
          <input type="text" class="form-control" name="phoneNumber" placeholder="Número de teléfono">
        </div>
        <div class="form-group">
          <label for="cardNumber">Número de tarjeta</label>
          <input type="text" class="form-control" name="cardNumber" placeholder="XXXX-XXXX-XXXX-XXXX">
        </div>
        <div class="form-group">
          <label for="expiration">Fecha de Caducidad</label>
          <input type="text" class="form-control" name="expiration" placeholder="MM/AA">
        </div>
        <div class="form-group">
          <label for="cvv">CVV</label>
          <input type="text" class="form-control" name="cvv" placeholder="CVV">
        </div>
        <div class="form-group">
          <label for="price">Precio de la Suscripción</label>
          <input type="text" class="form-control" name="price" value="19.99€" disabled>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" name="agreeCheckbox" id="agreeCheckbox">
          <label class="form-check-label" for="agreeCheckbox">Acepto los términos y condiciones</label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>
      <br>
    </div>
  </div>
</div>
@endsection
