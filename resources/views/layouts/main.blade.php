<?php
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Articulo() $articulos */
/** @var \MercadoPago\Preference $preference */
use App\Models\Usuario;
$totalcantidad = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tamara Rodríguez Manznaero"/>
    <title>Beauty - @yield('titulo')</title>
    <link rel="icon" type="image/jpg" href="{{ url('/favicon.jpg') }}" />
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg menu">
        <div class="container px-5">
            <h1><a class="navbar-brand text-white logo" href="<?= route('inicio'); ?>">Beauty</a></h1>
            <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="text-white bi bi-list"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link text-white active" href="<?= route('inicio'); ?>">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?= route('productos'); ?>">Productos</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="<?= route('blog'); ?>">Blog</a></li>
                    @auth
                        @if(Usuario::admin())
                            <li class="nav-item"><a class="nav-link text-white" href="<?= route('panel.index'); ?>">Panel</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="<?= route('perfil'); ?>"><i class="bi bi-person"></i> {{ auth()->user()->nombre_usuario }}</a></li>
                        @endif
                        @if(Usuario::comun())
                            <li class="nav-item"><a class="nav-link text-white" href="<?= route('perfil'); ?>"><i class="bi bi-person"></i> {{ auth()->user()->nombre_usuario }}</a></li>
                        @endif
                        <li class="nav-item">
                            <form action="{{route('auth.logout')}}" method="POST">
                                @csrf
                                <button class="btn nav-link text-white" type="submit">Cerrar sesión</button>
                            </form>
                        </li>
                        @if(Usuario::comun())
                        <li class="nav-item"><a class="nav-link text-white" href="<?= route('cart.carrito'); ?>"><i class="bi bi-bag"></i> {{ Cart::getTotalQuantity()}}</a></li>
                        @endif
                    @elseguest
                        <li class="nav-item"><a class="nav-link text-white" href="<?= route('registro'); ?>">Registrarse</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="<?= route('auth.iniciarSesion'); ?>">Iniciar sesión</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @if(Session::has('message_success'))
            <div class="alert alert-success" role="alert">{!! Session::get('message_success') !!}</div>
        @endif
        @if(Session::has('message_danger'))
            <div class="alert alert-danger" role="alert">{!! Session::get('message_danger') !!}</div>
        @endif
        @yield('content')
    </div>
    <!-- Footer-->
    <footer class="py-4 mt-auto footer-web">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Beauty 2021</div></div>
                <div class="col-auto">
                    <p class="small m-0 text-white text-center">Escuela Da Vinci | Portales y Comercios electrónicos | Final</p>
                </div>
                <div class="col-auto">
                    <p class="small m-0 text-white">Tamara Rodríguez Manzanero</p>
                </div>
            </div>
        </div>
    </footer>
    @stack('js')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
</body>
</html>
