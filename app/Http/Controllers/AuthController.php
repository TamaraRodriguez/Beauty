<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller{
    public function iniciarSesion(){
        return view ('auth.login');
    }

    public function login(Request $request){
        //Esto se hace para validar solo esos campos cuando hay más en el formulario.
        $credenciales = $request->only(['email', 'password']);

        //Validación de que no manda campos vacios en el formulario de login.
        $request->validate(Usuario::reglas(), Usuario::mensajeValidacion());

        if(!auth()->attempt($credenciales)){
            //Si no son correctas nos lleva de nuevo a la página iniciar-sesion.
            return redirect()->route('auth.iniciarSesion')->with('message_danger', 'Credenciales incorrectas');
            //withInput envía los datos del formulario a la página de nuevo.
        }
        //Guardamos el usuario para mostrarlo en el mensaje de bienvenida
        /** @var Usuario $user */
        $user = auth()->user();

        return redirect()->route('panel.index')->with('message_success', '¡Que bueno verte de nuevo ' . $user->nombre_usuario . '!');
    }

    public function cerrarSesion(){
        /** @var Usuario $user */
        $user = auth()->user();

        auth()->logout();

        return redirect()->route('auth.iniciarSesion')->with('message_success', '¡Esperamos verte pronto ' . $user->nombre_usuario . '!');
    }
}
