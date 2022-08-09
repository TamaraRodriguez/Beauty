<?php
//En el controlador se crea la variable $articulo para que pueda utilizarse aquí
/** @var \App\Models\Articulo $articulo*/
?>

<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Artículo: ' . $articulo->titulo)

<!-- Creamos el contenido de la vista -->
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <article>
                    <header class="mb-4">
                        <h2 class="fw-bolder mb-1">{{ $articulo->titulo }}</h2>
                        <div class="text-muted fst-italic mb-2">Publicado el {{ $articulo->fecha_publicacion }}</div>
                        <!-- Post categories-->
                        @if($articulo->etiquetas->count() > 0)
                            @foreach($articulo->etiquetas as $etiqueta)
                                <div class="badge bg-secondary bg-gradient rounded-pill mb-2">{{ $etiqueta->etiqueta }}</div>
                            @endforeach
                        @endif
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4">
                        @if($articulo->imagen_portada != null)
                            <img class="img-fluid rounded w-100" src="{{ url('img/' . $articulo->imagen_portada) }}" alt="{{ $articulo->titulo }}" />
                        @endif
                    </figure>
                    <p class="fs-5 mb-4">{{ $articulo->contenido }}</p>
                    <figure class="mb-4">
                        @if($articulo->imagen_contenido != null)
                            <img class="img-fluid rounded w-100" src="{{ url('img/' . $articulo->imagen_contenido) }}" alt="{{ $articulo->titulo }}" />
                        @endif
                    </figure>
                </article>
            </div>
        </div>
    </div>
@endsection
