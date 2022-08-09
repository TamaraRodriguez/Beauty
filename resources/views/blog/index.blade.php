<?php
//En el controlador se crea la variable $articulos para que pueda utilizarse aquí
/** @var \Illuminate\Database\Eloquent\Collection| \App\Models\Articulo() $articulos */
?>
<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Listado de artículos del blog')

<!-- Creamos el contenido de la vista -->
@section('content')
    <section class="container py-5 mt-5">
        <div class="row">
            <div class="text-center">
                <h2 class="fw-bolder fs-5 mb-4">Panel de administración del blog</h2>
                <p class="fw-normal text-muted mb-5">Desde este listado puedes crear un nuevo artículo, o modificar y eliminar un artículo del blog ya existente.</p>
            </div>

            <div class="container-fluid mb-5">
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 p-0">
                        <div class="d-flex justify-content-between">
                            <a class="nav-link text-white btn btn-beauty w-50" href="{{ route('blog.nuevoArticulo') }}">Crear nuevo artículo</a>
                            <a class="nav-link btn btn-editar-beauty w-25" href="{{ route('panel.index') }}">Volver al panel</a>
                        </div>

                        <div class="table-responsive mt-5 card h-100 shadow border-0">
                            <table class="table table-striped">
                                <thead class="text-center">
                                <tr class="py-1">
                                    <th scope="col">#</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Publicado</th>
                                    <th scope="col">Etiquetas</th>
                                    <th scope="col">Contenido</th>
                                    <th scope="col">Portada</th>
                                    <th scope="col">Detalle</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articulos as $articulo)
                                    <tr>
                                        <td class="text-center">{{ $articulo->articulo_id }}</td>
                                        <td class="text-left">{{ $articulo->titulo }}</td>
                                        <td class="text-center small">{{ $articulo->fecha_publicacion }}</td>
                                        <td class="text-center">
                                            @if($articulo->etiquetas->count() > 0)
                                                @foreach($articulo->etiquetas as $etiqueta)
                                                    <div class="badge bg-secondary bg-gradient rounded-pill mb-2">{{ $etiqueta->etiqueta }}</div>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="text-right contenido">{{ $articulo->contenido }}</td>
                                        @if($articulo->imagen_portada != null)
                                            <td class="text-center">Sí</td>
                                        @else
                                            <td class="text-center">No</td>
                                        @endif
                                        <td class="text-center">
                                            <a class="btn btn-editar-beauty btn-sm mt-1" href="{{ route('blog.detalle', ['id' => $articulo->articulo_id]) }}"><i class="bi bi-box-arrow-up-right"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-editar-beauty btn-sm mt-1" href="{{ route('blog.editarArticulo', ['id' => $articulo->articulo_id]) }}"><i class="bi bi-pencil"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-danger btn-sm mt-1" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Confirmación para eliminar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Desea eliminar el artículo?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('blog.eliminar', ['id' => $articulo->articulo_id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-editar-beauty btn-sm m-1" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                            <button type="submit" class="btn btn-danger btn-sm m-1">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
