<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Usuario;
use App\Models\Venta;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercadoPago\Item;
use MercadoPago\Preference;

class MercadoPagoController extends Controller{
    /**
     * @throws Exception
     */
    public function test(){
        // Crea un objeto de preferencia
        $preference = new Preference();
        $total = \Cart::getTotal();


        // Crea un ítem en la preferencia
        $item = new Item();
        $item->title = 'Productos de Beauty';
        $item->quantity = 1;
        $item->unit_price = $total; //Pasar el total del carrito

        $preference->back_urls = [
            'success' => route('mp.success'),
            'pending' => route('mp.pending'),
            'failure' => route('mp.failure'),
        ];

        $preference->items = [$item];
        $preference->save();

        return view ('cart.carrito', ['preference' => $preference]);
    }

    public function successResponse (Request $request){
        $cartItems = \Cart::getContent();
        $total = \Cart::getTotal();

        $usuario_id = Auth::user()->usuario_id;

        //Insertar datos en la base de datos
        if($total != 0){
            $compraDetalles = [
                'usuario_id' => $usuario_id,
                'total' => $total,
                'fecha' => date('Y-m-d'),
            ];
            Compra::create($compraDetalles);
        }

        $compras = Compra::all();
        $ultimaCompra = null;

        foreach ($compras as $compra){
            $ultimaCompra = $compra['compra_id'];
        }

        foreach ($cartItems as $producto){
            $ventaDetalles = [
                'compra_id' => $ultimaCompra,
                'producto_id' => $producto['id'],
            ];

            Venta::create($ventaDetalles);
        }

        //Vaciamos el carrito
        \Cart::clear();

        return redirect()
            ->route('productos')
            ->with('message_success', '¡Gracias por su compra!.');
    }

    public function pendingResponse (Request $request){
        return redirect()
            ->route('cart.carrito')
            ->with('message_danger', 'Su compra esta pendiente de confirmación. Aguarde a la espera o intentelo de nuevo.');
    }

    public function failureResponse (Request $request){
        return redirect()
            ->route('cart.carrito')
            ->with('message_danger', 'No se ha podido realizar su compra, intentelo de nuevo por favor.');
    }

}
