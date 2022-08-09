<?php
/** @var \Illuminate\Support\ViewErrorBag $errors*/
/** @var \App\Models\Articulo $articulo */
/** @var \App\Models\Etiqueta $etiquetas */
?>
<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Editar artículo')

<!-- Creamos el contenido de la vista -->
@section('content')
    <section class="pb-3">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="text-center">
                <h2 class="fw-bolder fs-5 mb-4">Editando artículo </h2>
                <p class="fw-normal text-muted mb-5">{{ $articulo->titulo }}</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-10 mx-auto mb-5 card h-100 shadow border-0">
                    <form action="{{ route('blog.editadoArticulo', ['id' => $articulo->articulo_id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Se exige con todos los metodos que no sean GET para protegernos contra CSRF, si no está nos tira error 419.-->
                        @method('PUT')
                        <div class="mb-3 mt-3">
                            <label for="titulo" class="form-label">Título *</label>
                            <input type="text" id="titulo" name="titulo" class="form-control"
                                   @error('titulo') aria-describedby="error-titulo" @enderror
                                   value="{{ old('titulo', $articulo->titulo) }}">
                            @error('titulo')
                            <div class="alert alert-danger mt-3" role="alert" id="error-titulo">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="fecha_publicacion" class="form-label">Fecha de edición *</label>
                            <input type="date" id="fecha_publicacion" name="fecha_publicacion" class="form-control"
                                   @error('fecha_publicacion') aria-describedby="error-fecha_publicacion" @enderror
                                   value="<?php echo date("Y-m-d");?>">
                            @error('fecha_publicacion')
                            <div class="alert alert-danger mt-3" role="alert" id="error-fecha_publicacion">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="contenido" class="form-label">Contenido * (Mínimo 80 caracteres)</label>
                            <textarea id="contenido"  name="contenido" class="form-control" rows="10"
                                      @error('contenido') aria-describedby="error-contenido" @enderror>{{ old('contenido', $articulo->contenido) }}</textarea>
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
                            <div class="mb-3">
                                @if($articulo->imagen_portada != null)
                                    <img class="w-100" src="{{ url('img/' . $articulo->imagen_portada) }}" alt="{{ $articulo->titulo }}">
                                @else
                                    <p>No hay imagen de portada.</p>
                                @endif
                            </div>
                            <input type="file" id="imagen_portada" name="imagen_portada" class="form-control w-100">
                        </div>
                        <div class="mb-3">
                            <label for="imagen_contenido" class="form-label">Imagen del contenido</label>
                            <div class="mb-3">
                                @if($articulo->imagen_contenido != null)
                                    <img class="w-100" src="{{ url('img/' . $articulo->imagen_contenido) }}" alt="{{ $articulo->titulo }}">
                                @else
                                    <p>No hay imagen internas en el artículo.</p>
                                @endif
                            </div>
                            <input type="file" id="imagen_contenido" name="imagen_contenido" class="form-control w-100">
                        </div>
                        <div class="mb-3">
                            <p class="small">Los campos con (*) son obligatorios.</p>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <button class="btn btn-primary btn-beauty w-50 mt-3 mb-3" type="submit">Editar</button>
                            <a class="nav-link atras" href="{{ route('blog.index') }}">Volver al panel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
