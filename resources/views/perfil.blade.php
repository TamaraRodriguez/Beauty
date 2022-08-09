<?php
//En el controlador se crea la variable $articulos para que pueda utilizarse aquí
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Usuario() $usuario */
?>
<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Perfil')

<!-- Creamos el contenido de la vista -->
@section('content')
    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5">
            <h2 class="fw-bolder fs-5 mb-4">Mi cuenta</h2>
            <div class="card border-0 shadow rounded-3 overflow-hidden">
                <div class="card-body p-0">
                    <div class="row gx-0">
                        <div class="col-lg-6 col-xl-5 py-lg-5">
                            <div class="p-4 p-md-5">
                                <h3 class="h2 fw-bolder mb-5">{{ auth()->user()->nombre }} {{ auth()->user()->apellidos }}</h3>
                                <p class="contenido">Fecha de nacimiento: {{ auth()->user()->fecha_nacimiento }}</p>
                                <p class="contenido">Nombre de usuario: {{ auth()->user()->nombre_usuario }}</p>
                                <p class="contenido mb-5">Email: {{ auth()->user()->email }}</p>
                                <a class="btn btn-primary btn-beauty px-4 me-sm-3" href="{{ route('perfil.editarPerfil', ['id' => auth()->user()->usuario_id]) }}">Editar</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <div class="bg-featured-blog">
                                @if(auth()->user()->imagen != null)
                                    <img class="card-img-top" src="{{ url('img/' . auth()->user()->imagen) }}" alt="{{ auth()->user()->nombre_usuario }}"/>
                                @else
                                    <img class="card-img-top" src="{{ url('img/1633977916.jpg') }}" alt="{{ auth()->user()->nombre_usuario }}"/>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
