@extends('layout.netflix')
@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Añadir Episodio a {{ $serie->title }}</h2>
                <form method="POST" action="{{ route('createEpisode') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" class="form-control" name="title" placeholder="Título" required>
                    </div>
                    <div class="form-group">
                        <label for="episode_number">Número de episodio</label>
                        <input type="number" class="form-control" name="episode_number" placeholder="Número de episodio" min="1" required>
                    </div>
                    <div class="form-group">
                        <label for="season">Temporada</label>
                        <select class="form-control" name="season" required>
                            <option selected disabled>Selecciona el número de temporada</option>
                            @for ($i = 1; $i <= 50; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea class="form-control" name="sinopsis" placeholder="Sinopsis" rows="3" required></textarea>
                    </div>
                    <input type="number" class="form-control" name="serie_id" value="{{ $serie->id }}" hidden required>
                    <div id="vista-previa"></div>

                    <br>
                    <div class="form-group">
                        <label for="file">Archivo de vídeo</label>
                        <input type="file" class="form-control-file" id="file" name="file" accept="video/mp4" required>
                    </div>                    
                    <br>
                    <button type="submit" class="btn btn-primary">Añadir Episodio</button>
                </form>
                <br>
            </div>
        </div>
    </div>
    <script>
        // Función para mostrar vista previa de las imágenes seleccionadas
        function mostrarVistaPrevia() {
          const archivos = Array.from(document.getElementById('file').files);
          const vistaPreviaContainer = document.getElementById('vista-previa');
          vistaPreviaContainer.innerHTML = '';
    
          archivos.forEach(archivo => {
            const lector = new FileReader();
            lector.onload = function(evento) {
              const url = evento.target.result;
              const video = document.createElement('video');
              video.src = url;
              video.classList.add('video-previo');
              video.controls = true;
              vistaPreviaContainer.appendChild(video);
            }
            lector.readAsDataURL(archivo);
          });
        }
    
        // Evento para mostrar la vista previa cuando se selecciona el archivo de vídeo
        document.getElementById('file').addEventListener('change', mostrarVistaPrevia);
    </script>
@endsection
