<?php
/** @var \MercadoPago\Preference $preference */
$cartItems = \Cart::getContent();
$total = Cart::getTotal();

?>
@extends('layouts.main')

@push('js')
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago('<?= config('mercadopago.public_key'); ?>', {
            locale: "es-AR"
        });

        // Inicializa el checkout
        mp.checkout ({
            preference: {
                id: '<?= $preference->id; ?>',
            },
            render: {
                label: 'Finalizar compra', // Cambia el texto del botón de pago (opcional)
                container: '#btn-mercadopago', // Indica el nombre de la clase donde se mostrará el botón de pago
            },
        });
    </script>
@endpush

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Finalizar compra')

<!-- Creamos el contenido de la vista -->
@section('content')
    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5">
            <h2 class="fw-bolder fs-5 mb-4">Tú carrito</h2>
            @if($total != 0)
            <p class="fw-normal text-muted mb-5">Lista de productos seleccionados para realizar su compra.</p>
            <div class="card border-0 shadow rounded-3 overflow-hidden">
                <div class="table-responsive card h-100 shadow border-0">
                    <table class="table table-striped">
                        <thead class="text-center">
                            <tr class="py-1">
                                <th scope="col"></th>
                                <th scope="col text-left">Título</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cartItems as $producto)
                            <tr>
                                <td></td>
                                <td class="text-left">{{ $producto->name }}</td>
                                <td class="text-center">
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $producto->id}}" >
                                        <input type="number" name="quantity" value="{{ $producto->quantity }}" class="w-6 text-center bg-gray-300" />
                                        <button type="submit" class="btn btn-editar-beauty btn-sm mt-1"><i class="bi bi-bag-plus"></i></button>
                                    </form>
                                </td>
                                <td class="text-center">${{ $producto->price }}</td>
                                <td class="hidden text-right md:table-cell">
                                    <form action="{{route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $producto->id }}" name="id">
                                        <button class="btn btn-danger btn-sm mt-1" type="submit"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                            <tr>
                                <td></td>
                                <td class="fw-bold">Total:</td>
                                <td></td>
                                <td class="text-center fw-bold">${{ Cart::getTotal() }}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <form action="{{ route('cart.clear') }}" method="POST">
                @csrf
                <button class="btn btn-editar-beauty w-100 mx-auto mt-3 text-center" >Vaciar carrito</button>
            </form>
            <a class="btn btn-beauty btn-sm text-white w-100 mt-3 mb-3" href="<?= route('productos'); ?>">Seguir comprando</a>
            <div id="btn-mercadopago" class="btn text-center text-white w-100 mt-3 mb-3 mx-auto"></div>
            @else
                <p class="fw-normal text-muted mb-5">Su carrito está vacío. Aquí aparecerá la lista de sus productos añadidos al carrito.</p>
                <a class="btn btn-beauty btn-sm text-white w-100 mt-3 mb-3" href="<?= route('productos'); ?>">Ver productos</a>
            @endif
        </div>
    </section>
@endsection
