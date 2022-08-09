<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function cartList(){
        $cartItems = \Cart::getContent();
        //dd($cartItems);
        return view('cart.carrito', compact('cartItems'));
    }

    public function addToCart(Request $request){
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        return redirect()
            ->route('cart.carrito')
            ->with('message_success', 'El producto ha sido añadido al carrito');
    }

    public function updateCart(Request $request){
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity+1
                ],
            ]
        );
        return redirect()
            ->route('cart.carrito')
            ->with('message_success', 'Producto añadido al carrito.');
    }

    public function removeCart(Request $request){
        \Cart::remove($request->id);
        return redirect()
            ->route('cart.carrito')
            ->with('message_success', 'Producto eliminado correctamente.');
    }

    public function clearAllCart(){
        \Cart::clear();
        return redirect()
            ->route('productos')
            ->with('message_success', 'Carrito vacío');
    }
}
