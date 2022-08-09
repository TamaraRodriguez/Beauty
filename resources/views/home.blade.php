<!-- Extendemos de main que es la vista que muestra el navegador y el footer -->
@extends('layouts.main')

<!-- Ageregamos el título de la sección en la que estamos -->
@section('titulo', 'Inicio')

<!-- Creamos el contenido de la vista -->
@section('content')
    <!-- Header-->
    <header class="banner py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h2 class="display-5 fw-bolder bold mb-2">Productos naturales que te cuidan toda la vida.</h2>
                        <p class="lead fw-normal p-beauty mb-4">No utilizamos productos sintéticos, aromas artificiales ni hacemos testeos en animales. Gran parte de nuestros ingredientes poseen certificado orgánico y apto vegano.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg btn-beauty px-4 me-sm-3" href="<?= route('productos'); ?>">Ver Productos</a>
                            <a class="btn btn-outline-light btn-editar-beauty btn-lg px-4" href="<?= route('blog'); ?>">Leer Blog</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                </div>
            </div>
        </div>
    </header>
    <section class="container pt-4 pb-2">
        <div class="row">
            <div class="mt-5 col-12 col-lg-4">
                <img src="{{ url('img/home-1.jpg') }}" class="img-fluid mt-3" alt="Jabones naturales">
            </div>
            <div class="mt-5 mb-3 col-12 col-lg-8 text-right">
                <h3 class="h2 pb-1">¿Cómo se elaboran los productos?</h3>
                <p>Nuestra manera de trabajar nos permite encontrar el ritmo de producciones pequeñas, respetando los procesos artesanales para ofrecer el máximo cuidado a la hora de elaborar y minimizar la pérdida de las propiedades de cada materia prima. </p>
                <p>La simplicidad es el común denominador en nuestras recetas y diseños de packaging. Es nuestra forma de no usar recursos innecesarios para lograr un resultado efectivo, siendo respetuosos con el medio ambiente.</p>
                <p>Creemos que podemos reducir el impacto ambiental usando el sentido común. Desde nuestra óptica, no hace falta “adornar” un producto con tantos artilugios de diseño y packaging: elegimos lo simple y funcional.</p>
            </div>

        </div>
    </section>
    <section class="container pb-2">
        <div class="row">
            <div class="mt-5 mb-3 col-12 col-lg-8 text-right">
                <h3 class="h2 pb-1">Calidad de los productos</h3>
                <p>En Beauty priorizamos elaborar productos a partir de materias primas seleccionadas, naturales, nobles y puras, logrando formulaciones con una máxima proporción de principios activos.</p>
                <p>No utilizamos productos sintéticos, aromas artificiales ni hacemos testeos en animales. Gran parte de nuestros ingredientes poseen certificado orgánico y apto vegano.</p>
                <p>Los productos Beauty pueden presentar distinta coloración o aromas de una partida a otra, ya que no pasan por procesos industrializados para obtener un resultado uniforme. Lo natural es así, nunca es exactamente igual.
                Contamos con más de 20 sucursales a lo largo del territorio argentino y estamos trabajando para seguir acompañandolos en cada momento.</p>
            </div>
            <div class="mt-5 col-12 col-lg-4">
                <img src="{{ url('img/home-2.jpg') }}" class="img-fluid mt-3" alt="Chica tumbada en el césped">
            </div>
        </div>
    </section>
    <section class="container pb-4">
        <div class="row">
            <div class="mt-5 col-12 col-lg-4">
                <img src="{{ url('img/home-3.jpg') }}" class="img-fluid mt-2" alt="Aceite natural de kiwi">
            </div>
            <div class="mt-5 mb-3 col-12 col-lg-8 text-right">
                <h3 class="h2 pb-1">¿Quien está detrás de Beauty?</h3>
                <p>Somos Irene y Valeria, creadoras de Beauty, que surgió como resultado de un proceso personal, motivados por querer llevar una vida más saludable. En este camino, en el año 2010, creamos nuestra primera pasta dental y pronto la acompañaron otros productos de cosmética más consciente. Fuimos ampliando la línea, seguidores y Beauty sigue creciendo como marca, pero sobre todo como reflejo de nuestra búsqueda.</p>
                <p>Creemos en un tipo de empresa diferente, con buenos hábitos comerciales, cuyo principal objetivo no es ganar dinero por el dinero mismo, sino ofrecer un servicio que aporte valor y nos represente. Intentamos que Beauty sea el reflejo de una forma armónica de vivir.</p>
            </div>
        </div>
    </section>
@endsection
