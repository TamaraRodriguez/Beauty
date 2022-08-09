<?php
/** @var \Illuminate\Support\ViewErrorBag $errors*/
/** @var \App\Models\Usuario $usuario */
?>
<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Editar perfil')

<!-- Creamos el contenido de la vista -->
@section('content')
    <section class="pb-3">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="text-center">
                <h2 class="fw-bolder fs-5 mb-4">Mi cuenta</h2>
                <p class="fw-normal text-muted mb-5">{{ $usuario->nombre }} {{ $usuario->apellidos }}</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-10 mx-auto mb-5 card h-100 shadow border-0">
                    <form action="{{ route('perfil.editadoPerfil', ['id' => $usuario->usuario_id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Se exige con todos los metodos que no sean GET para protegernos contra CSRF, si no está nos tira error 419.-->
                        @method('PUT')
                        <div class="mb-3 mt-3">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text" id="nombre" name="nombre" class="form-control"
                                   @error('nombre') aria-describedby="error-nombre" @enderror
                                   value="{{ old('nombre', $usuario->nombre) }}">
                            @error('nombre')
                            <div class="alert alert-danger mt-3" role="alert" id="error-nombre">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="apellidos" class="form-label">Apellidos *</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control"
                                   @error('apellidos') aria-describedby="error-apellidos" @enderror
                                   value="{{ old('apellidos', $usuario->apellidos) }}">
                            @error('apellidos')
                            <div class="alert alert-danger mt-3" role="alert" id="error-apellidos">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento *</label>
                            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control"
                                   @error('fecha_nacimiento') aria-describedby="error-fecha_nacimiento" @enderror
                                   value="{{ old('fecha_nacimiento', $usuario->fecha_nacimiento) }}">
                            @error('fecha_nacimiento')
                            <div class="alert alert-danger mt-3" role="alert" id="error-fecha_nacimiento">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Foto de perfil</label>
                            <div class="mb-3">
                                @if($usuario->imagen != null)
                                    <img class="w-100" src="{{ url('img/' . $usuario->imagen) }}" alt="{{ $usuario->nombre }}">
                                @else
                                    <img class="w-100" src="{{ url('img/1633977916.jpg') }}" alt="{{ $usuario->nombre }}">
                                @endif
                            </div>
                            <input type="file" id="imagen" name="imagen" class="form-control w-100">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" id="email" name="email" class="form-control"
                                   @error('email') aria-describedby="error-email" @enderror
                                   value="{{ old('email', $usuario->email) }}">
                            @error('email')
                            <div class="alert alert-danger mt-3" role="alert" id="error-email">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nombre_usuario" class="form-label">Nombre de usuario *</label>
                            <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control"
                                   @error('nombre_usuario') aria-describedby="error-nombre_usuario" @enderror
                                   value="{{ old('nombre_usuario', $usuario->nombre_usuario) }}">
                            @error('nombre_usuario')
                            <div class="alert alert-danger mt-3" role="alert" id="error-nombre_usuario">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <p class="small">Los campos con (*) son obligatorios.</p>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <button class="btn btn-primary btn-beauty w-50 mt-3 mb-3" type="submit">Editar</button>
                            <a class="nav-link atras" href="{{ route('perfil') }}">Volver al perfil</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
