<?php
/** @var \Illuminate\Support\ViewErrorBag $errors*/
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Etiqueta[] $etiqueta*/
/** @var  \Illuminate\Support\Collection|array $etiquetaSelect */

?>
<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Crear un nuevo artículo')

<!-- Creamos el contenido de la vista -->
@section('content')
    <section class="pb-3">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="text-center">
                <h2 class="fw-bolder fs-5 mb-4">Crear un nuevo artículo </h2>
                <p class="fw-normal text-muted mb-5">Crea un nuevo artículo para publicar en el blog.</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-10 mx-auto mb-5 card h-100 shadow border-0">
                    <form action="{{ route('blog.crearArticulo') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Se exige con todos los metodos que no sean GET para protegernos contra CSRF, si no está nos tira error 419.-->
                        <div class="mb-3 mt-3">
                            <label for="titulo" class="form-label">Título *</label>
                            <input type="text" id="titulo" name="titulo" class="form-control"
                                   @error('titulo') aria-describedby="error-titulo" @enderror
                                   value="{{ old('titulo') }}">
                            @error('titulo')
                            <div class="alert alert-danger mt-3" role="alert" id="error-titulo">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="fecha_publicacion" class="form-label">Fecha de publicación *</label>
                            <input type="date" id="fecha_publicacion" name="fecha_publicacion" class="form-control"
                                   @error('fecha_publicacion') aria-describedby="error-fecha_publicacion" @enderror
                                   value="<?php echo date("Y-m-d");?>">
                            @error('fecha_publicacion')
                            <div class="alert alert-danger mt-3" role="alert" id="error-fecha_publicacion">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contenido" class="form-label">Contenido * (Mínimo 80 caracteres)</label>
                            <textarea class="form-control" id="contenido" name="contenido" rows="3"
                                      @error('contenido') aria-describedby="error-contenido" @enderror
                                      >{{ old('contenido') }}</textarea>
                            @error('contenido')
                            <div class="alert alert-danger mt-3" role="alert" id="error-contenido">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Etiquetas *</label>
                            <div class="form-group">
                                @foreach($etiquetas as $etiqueta)
                                    <label class="form-check-label me-2">
                                        <input type="checkbox" class="form-check-input me-1" name="etiqueta_id[]" value="{{ $etiqueta->etiqueta_id }}"
                                            @if($etiquetaSelect->contains($etiqueta->etiqueta_id))
                                                checked
                                            @endif> {{ $etiqueta->etiqueta }}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="imagen_portada" class="form-label">Imagen de la portada</label>
                            <input type="file" id="imagen_portada" name="imagen_portada" class="form-control w-100">
                        </div>
                        <div class="mb-3">
                            <label for="imagen_contenido" class="form-label">Imagen del contenido</label>
                            <input type="file" id="imagen_contenido" name="imagen_contenido" class="form-control w-100">
                        </div>
                        <div class="mb-3">
                            <p class="small">Los campos con (*) son obligatorios.</p>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <button class="btn btn-beauty text-white w-50 mt-3 mb-3" type="submit">Publicar</button>
                            <a class="nav-link atras" href="{{ route('blog.index') }}">Volver al panel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
