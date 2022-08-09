<?php
//En el controlador se crea la variable $articulos para que pueda utilizarse aquí
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Articulo() $articulos */
?>
<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Blog')

<!-- Creamos el contenido de la vista -->
@section('content')
    <!-- Page Content-->
    @foreach($articulos as $articulo)
        @if($articulo->articulo_id == 6)
    <section class="py-5">
        <div class="container px-5">
            <h2 class="fw-bolder fs-5 mb-4">Beauty Blog</h2>
            <div class="card border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-0">
                    <div class="row gx-0">
                        <div class="col-lg-6 col-xl-5 py-lg-5">
                            <div class="p-4 p-md-5">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Destacado</div>
                                <h3 class="h2 fw-bolder">{{ $articulo->titulo }}</h3>
                                <p class="contenido">{{ $articulo->contenido }}</p>
                                <a class="btn btn-primary btn-beauty px-4 me-sm-3" href="{{ route('blog.detalle', ['id' => $articulo->articulo_id]) }}">Leer más</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <div class="bg-featured-blog">
                                @if($articulo->imagen_portada != null)
                                    <img class="card-img-top" src="{{ url('img/' . $articulo->imagen_portada) }}" alt="{{ $articulo->titulo }}"/>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @endif
    @endforeach
    <!-- Blog preview section-->
    <section class="py-5">
        <div class="container px-5">
            <h2 class="h2 fw-bolder fs-5 mb-4">Más artículos</h2>
            <div class="row gx-5">
                @foreach($articulos as $articulo)
                <article class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        @if($articulo->imagen_portada != null)
                        <img class="card-img-top" src="{{ url('img/' . $articulo->imagen_portada) }}" alt="{{ $articulo->titulo }}"/>
                        @endif
                        <div class="card-body p-4">
                            @if($articulo->etiquetas->count() > 0)
                                @foreach($articulo->etiquetas as $etiqueta)
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $etiqueta->etiqueta }}</div>
                                @endforeach
                            @endif
                            <a class="text-decoration-none link-dark stretched-link" href="{{ route('blog.detalle', ['id' => $articulo->articulo_id]) }}">
                                <h3 class="h5 card-title mb-3">{{ $articulo->titulo }}</h3>
                            </a>
                            <p class="card-text mb-0 contenido">{{ $articulo->contenido }}</p>
                        </div>
                        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle me-3" src="{{ url('img/perfil.jpg') }}" alt="Tamara Rodríguez" />
                                    <div class="small">
                                        <div class="fw-bold">Tamara Rodríguez</div> <!-- Hacer la relación de tabalas con las de usuarios -->
                                        <div class="text-muted">{{ $articulo->fecha_publicacion }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
