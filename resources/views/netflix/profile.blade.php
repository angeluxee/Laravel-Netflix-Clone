@extends('layout.netflix')
@section('content')
    <br>
    <br>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Perfil de Usuario
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update', ['id' => $user->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    value="{{ $user->username }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $user->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="surname" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="surname" name="surname"
                                    value="{{ $user->surname }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $user->email }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="{{ $user->password }}"required>
                            </div>

                            <div class="mb-3">
                                <label for="dob" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="dob" name="dob"
                                    value="{{ $user->dob }}" required>
                            </div>
                            <div class="mb-3">

                                <label for="phoneNumber" class="form-label">Número de teléfono</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber"
                                    value="{{ $user->phoneNumber }}">
                            </div>

                            <div class="form-group">
                                <label for="avatar">Avatar</label>
                                <input type="file" class="form-control-file" id="avatar" name="avatar"
                                    accept="image/jpeg,image/png,image/webp">
                            </div>
                            <br>
                            <p>Avatar actual:</p>
                            <div class="mb-3" style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden;">
                                <img src="{{ asset($user->avatar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>             
                            <button type="submit" class="btn btn-primary">Actualizar perfil</button>

                        </form>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
@endsection
