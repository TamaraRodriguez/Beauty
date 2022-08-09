<?php
/** @var \Illuminate\Support\ViewErrorBag $errors*/
?>
<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Iniciar Sesión')

<!-- Creamos el contenido de la vista -->
@section('content')
    <section class="pb-3">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="text-center">
                <h2 class="fw-bolder fs-5 mb-4">Iniciar Sesion</h2>
                <p class="fw-normal text-muted mb-5">Completa los datos para iniciar sesión como usuario.</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-10 mx-auto mb-5 card h-100 shadow border-0">
                    <form action="{{ route('auth.login') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Se exige con todos los metodos que no sean GET para protegernos contra CSRF, si no está nos tira error 419.-->
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="text" id="email" name="email" class="form-control"
                                   @error('email') aria-describedby="error-email" @enderror
                                   value="{{ old('email') }}">
                            @error('email')
                            <div class="alert alert-danger mt-3" role="alert" id="error-email">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password" class="form-label">Contraseña *</label>
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control"
                                       @error('password') aria-describedby="error-password" @enderror
                                       value="{{ old('password') }}">
                                <button class="btn btn-editar-beauty" type="button" id="button-addon2" onclick="mostrarPass()"><i class="bi bi-eye icon"></i></button>
                            </div>
                            @error('password')
                            <div class="alert alert-danger mt-3" role="alert" id="error-password">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <p class="small">Los campos con (*) son obligatorios.</p>
                        </div>
                        <div class="text-center mt-3">
                            <button class="btn btn-beauty text-white mx-auto w-50 mt-3" type="submit">Iniciar sesión</button>
                            <a class="btn btn-editar-beauty w-50 mx-auto mt-3" href="{{ route('registro') }}">Registrarse</a>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <a class="nav-link atras" href="<?= route('inicio'); ?>">Volver a inicio</a>
                        </div>
                    </form>
                    <script type="text/javascript">
                        function mostrarPass(){
                            var tipo = document.getElementById("password");
                            if(tipo.type == "password"){
                                tipo.type = "text";
                                $('.icon').removeClass('bi bi-eye').addClass('bi bi-eye-slash');
                            }else{
                                tipo.type = "password";
                                $('.icon').removeClass('bi bi-eye-slash').addClass('bi bi-eye');
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
@endsection
