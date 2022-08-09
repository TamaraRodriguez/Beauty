<?php
/** @var \Illuminate\Database\Eloquent\Collection| \App\Models\Compra[] $estadisticas */
?>
<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Compras de los usuarios')

<!-- Creamos el contenido de la vista -->
@section('content')
    <section class="container py-5 mt-5">
        <div class="row">
            <div class="text-center">
                <h2 class="fw-bolder fs-5 mb-4">Estadísticas</h2>
                <p class="fw-normal text-muted mb-5">Análisis en detalle de los datos importantes en Beutify.</p>
            </div>
            <!-- Totales -->
            <div class="container-fluid mb-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-2">
                        <div class="card h-100 shadow border-0 bg-beauty pt-3 text-white">
                            <div class="card-body p-3 d-inline-flex justify-content-between">
                                <i class="bi bi-bag h3 mx-2 text-white d-inline-flex"><p class="card-text mb-0 mx-3 mt-1 h5 contenido">Pedidos vendidos</p></i>
                                <h3 class="h1 card-title mx-2 text-white">{{$estadisticas['numCompras']}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="card h-100 shadow border-0 bg-beauty pt-3 text-white">
                            <div class="card-body p-3 d-inline-flex justify-content-between">
                                <i class="bi bi-grid h3 mx-2 text-white d-inline-flex"><p class="card-text mb-0 mx-3 mt-1 h5 contenido">Productos vendidos</p></i>
                                <h3 class="h1 card-title mx-2 text-white">{{$estadisticas['productosVendidos']}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="card h-100 shadow border-0 bg-beauty pt-3 text-white">
                            <div class="card-body p-3 d-inline-flex justify-content-between">
                                <i class="bi bi-people h3 mx-2 text-white d-inline-flex"><p class="card-text mb-0 mx-3 mt-1 h5 contenido">Usuarios registrados</p></i>
                                <h3 class="h1 card-title mx-2 text-white">{{$estadisticas['numUsuarios']}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5 mt-3">
                        <div class="card h-150 shadow border-0 bg-beauty-great pt-3 text-white">
                            <div class="card-body p-3 d-inline-flex justify-content-between">
                                <i class="bi bi-cash-coin h3 mx-2 text-white d-inline-flex"><p class="card-text mb-0 mx-3 mt-1 h5 contenido">Total en ventas: </p></i>
                                <h3 class="h1 card-title mx-2 text-white">{{$estadisticas['totalVentas']}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5 mt-3">
                        <div class="card h-150 shadow border-0 bg-beauty-great pt-3 text-white">
                            <div class="card-body p-3 d-inline-flex justify-content-between">
                                <i class="bi bi-cash-coin h3 mx-2 text-white d-inline-flex"><p class="card-text mb-0 mx-3 mt-1 h5 contenido">Último producto vendido: </p></i>
                                <h3 class="h4 card-title mx-2 text-white">{{$estadisticas['ultimoProductoVendido']}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 p-0 mt-5">
                    <div class="col-12 m-0 p-0">
                        <div>
                            <a class="nav-link btn btn-editar-beauty mx-auto w-50" href="{{ route('panel.index') }}">Volver al panel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

