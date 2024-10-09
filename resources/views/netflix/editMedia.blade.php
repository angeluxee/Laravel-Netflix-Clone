@extends('layout.netflix')

@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Editar {{ $media->title }}</h2>
                <form method="POST" action="{{ route('editMedia', ['id' => $media->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" name="title" value="{{ $media->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" class="form-control" name="director" value="{{ $media->director }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cast">Elenco</label>
                        <input type="text" class="form-control" name="cast" value="{{ $media->cast }}" rows="3">
                        <small id="castHelp" class="form-text text-muted">Separa los nombres de los actores con comas.</small>
                    </div>
                    <div class="form-group">
                        <label for="year">Año</label>
                        <input type="number" class="form-control" name="year" value="{{ $media->year }}" min="1980" max="2024" required>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duración (minutos)</label>
                        <input type="number" class="form-control" name="duration" value="{{ $media->duration }}" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genero</label>
                        <select class="form-control" name="genre">
                            <option selected>{{ $media->genre }}</option>
                            <option value="Acció">Acción</option>
                            <option value="Comèdia">Comedia</option>
                            <option value="Drama">Drama</option>
                            <option value="Terror">Terror</option>
                            <option value="Ciència-ficció">Ciencia-ficción</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <input type="text" class="form-control" name="sinopsis" value="{{ $media->sinopsis }}" rows="3">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="poster">Poster</label>
                        <input type="file" class="form-control-file" id="poster" name="poster" value="{{ $media->poster }}" accept="image/jpeg,image/png,image/webp">
                    </div>
                    <div id="vista-previa"></div>
                    @if ($media->type === 'serie')
                        <input type="file" class="form-control-file" id="file" name="file" value="{{ $media->file }}" hidden>
                    @else
                        <br>
                        <label for="file">File</label>
                        <input type="file" class="form-control-file" id="file" name="file" value="{{ $media->file }}" accept="video/mp4">
                        <br>
                    @endif
                    <br>
                    <input type="text" class="form-control" name="type" value="{{ $media->type }}" hidden>
                    <button type="submit" class="btn btn-primary">Editar Media</button>
                </form>
                <br>
            </div>
        </div>
    </div>
    <script>
        function mostrarVistaPrevia() {
            const archivos = Array.from(document.getElementById('poster').files);
            const vistaPreviaContainer = document.getElementById('vista-previa');
            vistaPreviaContainer.innerHTML = '';

            archivos.forEach(archivo => {
                const lector = new FileReader();
                lector.onload = function(evento) {
                    const url = evento.target.result;
                    const imagen = document.createElement('img');
                    imagen.src = url;
                    imagen.classList.add('imagen-previa');
                    vistaPreviaContainer.appendChild(imagen);
                }
                lector.readAsDataURL(archivo);
            });
        }

        // Evento para mostrar la vista previa cuando se seleccionan imágenes
        document.getElementById('poster').addEventListener('change', mostrarVistaPrevia);
    </script>
@endsection
