<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Producto;
use App\Models\Usuario;
use App\Models\Venta;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\Cast\Array_;

class ComprasController extends Controller
{
    //Listamos las compras de los usuarios - Pasar al controlador de ComprasController
    public function compras(){
        $productos = Producto::all();
        $usuarios = Usuario::all();
        $compras = Compra::all();
        $ventas = Venta::all();

        return view('panel.compras', [
            'productos' => $productos,
            'usuarios' => $usuarios,
            'compras' => $compras,
            'ventas' => $ventas,
        ]);
    }

    public function estadisticas(){
        $productos = Producto::all();
        $usuarios = Usuario::all();
        $compras = Compra::all();
        $ventas = Venta::all();

        $totalCompras = 0;

        foreach ($compras as $compra){
            $totalCompras = $totalCompras + $compra['total'];
        }

        foreach ($ventas as $venta){
            $ultimoProducto = $venta['producto_id'];
        }

        foreach ($productos as $producto){
            if($ultimoProducto == $producto['producto_id']){
                $ultimoProductoVendido = $producto['nombre'];
            }
        }

        $estadisticas= [
            'numCompras' => $compras->count(),
            'numUsuarios' => $usuarios->count(),
            'productosVendidos' => $ventas->count(),
            'totalVentas' => $totalCompras,
            'ultimoProductoVendido' => $ultimoProductoVendido,
        ];

        return view('panel.estadisticas', [
            'estadisticas' => $estadisticas,
        ]);
    }
}
