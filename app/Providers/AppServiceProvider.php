<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use MercadoPago\SDK;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        //Acceso al archivo que nos dará los datos necesarios para acceder a mercado pago
        SDK::setAccessToken(config('mercadopago.access_token'));
    }
}
