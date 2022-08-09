<?php
//En el controlador se crea la variable $articulos para que pueda utilizarse aquí
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Producto() $productos */
use App\Models\Usuario;
?>

<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

@push('js')
    <script>

    </script>
@endpush

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Productos')

<!-- Creamos el contenido de la vista -->
@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <h2 class="fw-bolder fs-5 mb-4">Productos Beauty</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($productos as $producto)
                    <div class="col mb-5">
                        <div class="card shadow border-0">
                            @if($producto->imagen != null)
                                <img class="card-img-top" src="{{ url('img/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" />
                            @endif
                            <form action="{{ route('cart.add') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body p-4 pb-2" >
                                    <input type="hidden" value="{{ $producto->producto_id }}" id="id" name="id">
                                    <h3 class="h5 card-title fw-normal mb-1">{{ $producto->nombre }}</h3>
                                    <input type="hidden" value="{{ $producto->nombre }}" id="name" name="name">
                                    <p class="fw-bold h5 mb-4">$ {{ $producto->precio }}</p>
                                    <input type="hidden" value="{{ $producto->precio }}" id="price" name="price">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                </div>
                                <div class="card-footer p-4 pb-2 pt-0 bg-transparent border-top-0">
                                    <div class="row pt-4">
                                    @auth
                                        @if(Usuario::comun())
                                            <button type="submit" class="btn btn-beauty btn-sm btn-block text-white w-100 mb-3" >Comprar</button>
                                        @endif
                                    @endauth
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
