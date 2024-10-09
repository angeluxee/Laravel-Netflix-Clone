@extends('layout.netflix')
@section('content')
<br>
<div class="d-flex justify-content-between align-items-center">
    <h1 style="text-align: center;">Usuarios</h1>
    <a href="/addUser" class="btn btn-success mb-3">Añadir Usuario</a>
</div>
    @foreach ($users as $user)
      <div class="container mt-3">
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <img src="{{$user->avatar}}" alt="El Padrino" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-circle me-2">
              @if ($user->rol === 'admin')
                <a href="#" class="badge bg-warning ms-2 text-decoration-none me-3" style="line-height: 20px;">id = {{$user->id}}</a>
              @else
                <a href="#" class="badge bg-danger ms-2 text-decoration-none me-3" style="line-height: 20px;">id = {{$user->id}}</a>
              @endif
              <a href="#" class="text-decoration-none">{{$user->username}}</a>
            </div>
            <div class="ms-auto">
              <a href="{{ route('showUserForm', ['id' => $user->id]) }}" class="btn btn-primary me-2">Editar</a>
              @if ($user->rol === 'admin')
                <a href="#" class="btn btn-dark disabled">Eliminar</a>
              @else
                <a href="{{ route('removeUser', ['id' => $user->id]) }}" class="btn btn-danger">Eliminar</a>
              @endif
            </div>
          </li>
        </ul>
      </div>
    @endforeach
@endsection
