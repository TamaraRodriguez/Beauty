<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Panel')

<!-- Creamos el contenido de la vista -->
@section('content')
    <section class="py-5">
        <div class="container px-5">
            <h2 class="h2 fw-bolder fs-5 mb-4">Panel de administración</h2>
            <div class="row gx-5">
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{ url('img/blog.jpg') }}" alt="Notas, gafas, boligrafos y teclado"/>
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link" href="{{ route('blog.index') }}">
                                <h3 class="h5 card-title mb-3">Blog</h3>
                            </a>
                            <p class="card-text mb-0 contenido">Administrar contenido del blog.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{ url('img/users.jpg') }}" alt="Clientes"/>
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link" href="{{ route('panel.compras') }}">
                                <h3 class="h5 card-title mb-3">Usuarios</h3>
                            </a>
                            <p class="card-text mb-0 contenido">Lista de pedidos vendidos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card h-100 shadow border-0">
                        <img class="card-img-top" src="{{ url('img/estadisticas.jpg') }}" alt="Estadísticas"/>
                        <div class="card-body p-4">
                            <a class="text-decoration-none link-dark stretched-link" href="{{ route('panel.estadisticas') }}">
                                <h3 class="h5 card-title mb-3">Estadísticas</h3>
                            </a>
                            <p class="card-text mb-0 contenido">Estadísticas de Beauty.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


