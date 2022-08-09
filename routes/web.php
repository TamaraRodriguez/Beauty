<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MercadoPagoController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Navigate
|--------------------------------------------------------------------------
*/
//----- INICIO -----
//Migracion a un controller. [clase, método]
Route::get('/', [HomeController::class, 'home'])->name('inicio');

//----- PRODUCTOS -----
Route::get('productos', [ProductosController::class, 'productos'])->name('productos');

//----- BLOG -----
Route::get('blog', [BlogController::class, 'blog'])->name('blog');

//----- PANEL -----
Route::get('panel/index', [BlogController::class, 'panel'])->name('panel.index')
    ->middleware(['verifyAdmin']);

//----- MI CUENTA -----
Route::get('perfil', [UsuarioController::class, 'perfil'])->name('perfil')
    ->middleware(['verifyPerfil']);

//----- MI CUENTA ----- Editar
Route::get('perfil/{id}/editar', [UsuarioController::class, 'editarPerfil'])->name('perfil.editarPerfil')
    ->middleware(['verifyPerfil']);
Route::put('perfil/{id}/editado', [UsuarioController::class, 'editadoPerfil'])->name('perfil.editadoPerfil')
    ->middleware(['verifyPerfil']);

//----- CONTACTO -----
//Route::get('contacto', [HomeController::class, 'contacto']) ->name('contacto');
//Route::get('contacto', [\App\Http\Controllers\HomeController::class, 'contacto']);

//----- REGISTRO -----
Route::get('registro', [UsuarioController::class, 'registro'])->name('registro');
Route::post('registro', [UsuarioController::class, 'crearUsuario'])->name('auth.crearUsuario');

/*
|--------------------------------------------------------------------------
| Iniciar sesión - Authentication
|--------------------------------------------------------------------------
*/
Route::get('iniciar-sesion', [AuthController::class, 'iniciarSesion'])->name('auth.iniciarSesion');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('cerrar-sesion', [AuthController::class, 'cerrarSesion'])->name('auth.logout');

/*
|--------------------------------------------------------------------------
| Carrito
|--------------------------------------------------------------------------
*/
Route::get('cart/carrito', [CarritoController::class, 'cartList'])->name('cart.carrito')
    ->middleware(['verifyPerfil']);
Route::post('producto-agregado', [CarritoController::class, 'addToCart'])->name('cart.add')
    ->middleware(['verifyPerfil']);
Route::post('cart/carrito', [CarritoController::class, 'updateCart'])->name('cart.update')
    ->middleware(['verifyPerfil']);
Route::post('producto-eliminado', [CarritoController::class, 'removeCart'])->name('cart.remove')
    ->middleware(['verifyPerfil']);
Route::post('productos', [CarritoController::class, 'clearAllCart'])->name('cart.clear')
    ->middleware(['verifyPerfil']);

/*
|--------------------------------------------------------------------------
| Mercado Pago
|--------------------------------------------------------------------------
*/
Route::get('cart/carrito', [MercadoPagoController::class, 'test'])->name('cart.carrito')
    ->middleware(['verifyPerfil']);
Route::get('cart/carrito/mp/success', [MercadoPagoController::class, 'successResponse'])->name('mp.success')
    ->middleware(['verifyPerfil']);
/*Route::get('cart/carrito/mp/{id}/success', [MercadoPagoController::class, 'successResponse'])->name('mp.success')
    ->middleware(['verifyPerfil']);*/
Route::get('cart/carrito/mp/pending', [MercadoPagoController::class, 'pendingResponse'])->name('mp.pending')
    ->middleware(['verifyPerfil']);
Route::get('cart/carrito/mp/failure', [MercadoPagoController::class, 'failureResponse'])->name('mp.failure')
    ->middleware(['verifyPerfil']);

/*
|--------------------------------------------------------------------------
| PANEL - Compras - Estadísticas
|--------------------------------------------------------------------------
*/
//----- BLOG - PANEL ----- Listado de compras de los usuarios
Route::get('panel/compras-usuarios', [ComprasController::class, 'compras'])->name('panel.compras')
    ->middleware(['verifyAdmin']);
Route::get('panel/estadisticas', [ComprasController::class, 'estadisticas'])->name('panel.estadisticas')
    ->middleware(['verifyAdmin']);

/*
|--------------------------------------------------------------------------
| ABM Blog
|--------------------------------------------------------------------------
|
| Colocamos las siguientes rutas por orden de ruta más expecífica
| a más general/dinámica
|
*/

//----- BLOG - PANEL ----- Listar todos
Route::get('blog/index', [BlogController::class, 'index'])->name('blog.index')
    ->middleware(['verifyAdmin']);

//----- BLOG - PANEL ----- Detalle por id
Route::get('blog/{id}/detalle-articulo', [BlogController::class, 'detalle'])->name('blog.detalle')
    ->whereNumber('id');

//----- BLOG - PANEL ----- Crear
Route::get('blog/nuevo', [BlogController::class, 'nuevoArticulo'])->name('blog.nuevoArticulo')
    ->middleware(['verifyAdmin']);
Route::post('blog/nuevo', [BlogController::class, 'crearArticulo'])->name('blog.crearArticulo')
    ->middleware(['verifyAdmin']);

//----- BLOG - PANEL ----- Editar
Route::get('blog/{id}/editar', [BlogController::class, 'editarArticulo'])->name('blog.editarArticulo')
    ->middleware(['verifyAdmin']);
Route::put('blog/{id}/editado', [BlogController::class, 'editadoArticulo'])->name('blog.editadoArticulo')
    ->middleware(['verifyAdmin']);

//----- BLOG - PANEL ----- Eliminar
Route::delete('blog/{id}/eliminar', [BlogController::class, 'eliminar'])->name('blog.eliminar')
    ->middleware(['verifyAdmin']);








