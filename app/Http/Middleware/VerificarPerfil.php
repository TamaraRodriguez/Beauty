<?php

namespace App\Http\Middleware;

use App\Models\Usuario;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificarPerfil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /** @var Usuario $user */
        $user = auth()->user();

        if(Auth::user() && Auth::user()->tipo_fk == 1) {
            return $next($request);
        }else if(Auth::user() && Auth::user()->tipo_fk == 2){
            return $next($request);
        }else{
            return redirect('iniciar-sesion')->with('message_danger', '¡Acceso denegado!');
        }
    }
}
