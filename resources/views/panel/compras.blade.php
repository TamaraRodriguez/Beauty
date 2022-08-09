<?php
/** @var \Illuminate\Database\Eloquent\Collection| \App\Models\Usuario[] $usuarios */
/** @var \Illuminate\Database\Eloquent\Collection| \App\Models\Producto[] $productos */
/** @var \Illuminate\Database\Eloquent\Collection| \App\Models\Compra[] $compras */
/** @var \Illuminate\Database\Eloquent\Collection| \App\Models\Venta[] $ventas */
use App\Models\Usuario;
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
                <h2 class="fw-bolder fs-5 mb-4">Compras de los usuarios</h2>
                <p class="fw-normal text-muted mb-5">Listado de los pedidos vendidos en Beutify.</p>
            </div>

            <div class="container-fluid mb-5">
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 p-0">
                        <div>
                            <a class="nav-link btn btn-editar-beauty w-25" href="{{ route('panel.index') }}">Volver al panel</a>
                        </div>

                        <div class="table-responsive mt-5 card h-100 shadow border-0">
                            <table class="table table-striped">
                                <thead class="text-center">
                                <tr class="py-1">
                                    <th scope="col">Cod.</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col mx-2">Fecha</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Productos comprados</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($compras as $compra)
                                    <tr>
                                        <td class="text-center">{{ $compra->compra_id }}</td>
                                        @foreach($usuarios as $usuario)
                                            @if($compra->usuario_id == $usuario->usuario_id)
                                                <td class="text-center">{{ $usuario->nombre }}</td>
                                            @endif
                                        @endforeach
                                        <td class="text-center">{{ $compra->fecha }}</td>
                                        <td class="text-center">{{ $compra->total }}</td>
                                        <td class="text-center">
                                        @foreach($ventas as $venta)
                                            @if($compra->compra_id == $venta->compra_id)
                                                @foreach($productos as $producto)
                                                    @if($producto->producto_id == $venta->producto_id)
                                                        <div class="badge bg-secondary bg-gradient rounded-pill mb-2">{{ $producto->nombre }}</div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
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
    </section>
@endsection
