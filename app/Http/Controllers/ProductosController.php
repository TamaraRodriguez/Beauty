<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class ProductosController extends Controller{
    //Listar todos
    public function productos(){
        //Traemos toda la información de la tabla articulos (BBDD) a través del modelo Articulo.php
        $productos = Producto::all();

        return view('productos', [
            'productos' => $productos,
        ]);
    }
}
