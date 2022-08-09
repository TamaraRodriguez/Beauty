<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function perfil()
    {
        return view('perfil');
    }

    public function registro()
    {
        return view('registro');
    }

    //Crear - Formulario de registro
    public function crearUsuario(Request $request)
    {
        $input = $request->input();

        //Reglas de validación
        $request->validate(Usuario::reglasRegistro(), Usuario::mensajeValidacionRegistro());

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . "." . $imagen->clientExtension();
            $imagen->storeAs('', $nombreImagen, 'public_img');
            $input['imagen'] = $nombreImagen;
        }

        $input['password'] = bcrypt($request->password);

        $usuario = Usuario::create($input);

        return redirect()
            ->route('auth.iniciarSesion')
            //La función e() escapa cualquier caracter de HTML.
            ->with('message_success', e($usuario->nombre) . ' has sido registrado correctamente. Ya puedes iniciar sesión con sus credenciales.');

    }

    //Editar - Formulario de edición
    public function editarPerfil($id)
    {
        //Buscamos el usuario por el id
        $usuario = Usuario::findOrFail($id);

        //Redireccionamos a la vista del formulario donde podremos editar y pasamos la informaciónd del usuario a editar.
        return view('perfil.editar-perfil', [
            'usuario' => $usuario,
        ]);
    }

    //Editar - Función que nos validará los datos para la edición de los datos correctamente.
    public function editadoPerfil(Request $request, $id)
    {
        //Validación de la nueva información que el usuario introduce por el formulario de editar. Models/Articulo
        $request->validate(Usuario::reglasEditar(), Usuario::mensajeValidacionEditar());

        $input = $request->input();
        $usuario = Usuario::findOrFail($id);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . "." . $imagen->clientExtension();
            $imagen->storeAs('', $nombreImagen, 'public_img');
            $input['imagen'] = $nombreImagen;
            $imagenVieja = $usuario->imagen;
        } else {
            $imagenVieja = null;
        }

        $usuario->update($input);

        if ($request->hasFile('imagen')) {
            //unlink es la función de php para borrar un archivo en el disco.
            unlink(public_path('img/' . $imagenVieja));
        }

        return redirect()
            ->route('perfil')
            ->with('message_success', 'Tus datos han sido modificados correctamente.');
    }
}


