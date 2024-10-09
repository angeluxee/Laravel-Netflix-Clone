@extends('layout.netflix')
@section('content')
<br>
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Formulari de Pagament</h2>
      <form>
        <div class="form-group">
          <label for="inputCardNumber">Número de la targeta</label>
          <input type="text" class="form-control" id="inputCardNumber" placeholder="XXXX-XXXX-XXXX-XXXX">
        </div>
        <div class="form-group">
          <label for="inputExpiration">Data de Caducitat</label>
          <input type="text" class="form-control" id="inputExpiration" placeholder="MM/YY">
        </div>
        <div class="form-group">
          <label for="inputCVV">CVV</label>
          <input type="text" class="form-control" id="inputCVV" placeholder="CVV">
        </div>
        <div class="form-group">
          <label for="inputPrice">Preu de la Subscripció</label>
          <input type="text" class="form-control" id="inputPrice" value="19.99€" disabled>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Realitza el Pagament</button>
      </form>
    </div>
  </div>
</div>
@endsection