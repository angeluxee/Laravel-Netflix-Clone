@extends('layout.netflix')

@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Añadir Media</h2>
                <form method="POST" action="{{ route('createMedia') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="type">Tipo</label>
                        <select class="form-control" name="type">
                            <option value="movie">Película</option>
                            <option value="serie">Serie</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input type="text" class="form-control" name="title" placeholder="Títol" required>
                    </div>
                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" class="form-control" name="director" placeholder="Director" required>
                    </div>
                    <div class="form-group">
                        <label for="cast">Elenco</label>
                        <textarea class="form-control" name="cast" placeholder="Elenco" rows="3" required></textarea>
                        <small id="castHelp" class="form-text text-muted">Separa los nombres de los actores con comas.</small>
                    </div>
                    <div class="form-group">
                        <label for="year">Año</label>
                        <input type="number" class="form-control" name="year" placeholder="Año" min="1980" max="2024" required>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duración (minutos)</label>
                        <input type="number" class="form-control" name="duration" placeholder="Duración" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="genre">Género</label>
                        <select class="form-control" name="genre" required>
                            <option selected disabled>Selecciona un género</option>
                            <option value="Acció">Acción</option>
                            <option value="Comèdia">Comedia</option>
                            <option value="Drama">Drama</option>
                            <option value="Terror">Terror</option>
                            <option value="Ciència-ficció">Ciencia-ficción</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis" placeholder="Sinopsis" rows="3" required></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="poster">Póster</label>
                        <input type="file" class="form-control-file" id="poster" name="poster" accept="image/jpeg,image/png,image/webp" required>
                    </div>
                    <div id="vista-previa"></div>
                    <br>
                    <div class="form-group">
                        <label for="file">Archivo</label>
                        <input type="file" class="form-control-file" id="file" name="file" accept="video/mp4" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Añadir Media</button>
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

        document.getElementById('poster').addEventListener('change', mostrarVistaPrevia);
    </script>

@endsection
