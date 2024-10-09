@extends('layout.netflix')
@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Editar Usuario</h2>
                <form method="POST" action="{{ route('editUser', ['id' => $user->id])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" class="form-control" name="username" value="{{$user->username}}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">Apellido</label>
                        <input type="text" class="form-control" name="surname" value="{{$user->surname}}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" class="form-control" name="email" value="{{$user->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" value="{{$user->password}}" required>
                    </div>
                    <div class="form-group">
                        <label for="dob">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="dob" value="{{$user->dob}}" required>
                    </div>
                    <div class="form-group">
                        <label for="membership">Membresía</label>
                        <select class="form-control" name="membership">
                            <option value="1">Activa</option>
                            <option value="0">Inactiva</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Número de Teléfono</label>
                        <input type="text" class="form-control" name="phoneNumber"value="{{$user->phoneNumber}}">
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" class="form-control-file" id="avatar" name="avatar" accept="image/jpeg,image/png,image/webp">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Editar Usuario</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</script>
@endsection
