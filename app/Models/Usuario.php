<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usuario extends \Illuminate\Foundation\Auth\User
{
    use Notifiable;
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    protected $fillable = ['tipo_fk', 'nombre', 'apellidos', 'fecha_nacimiento', 'imagen', 'email', 'nombre_usuario', 'password'];

    //Reglas de validación
    public static function reglas(): array
    {
        return [
            //Pasamos los campos a validar
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public static function reglasEditar(): array{
        return [
            //Pasamos los campos a validar
            'nombre' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required',
            'email' => 'required|unique:usuarios',
            'nombre_usuario' => 'required',
        ];
    }

    public static function reglasRegistro(): array{
        return [
            //Pasamos los campos a validar
            'nombre' => 'required',
            'apellidos' => 'required',
            'fecha_nacimiento' => 'required',
            'email' => 'required|unique:usuarios',
            'nombre_usuario' => 'required|unique:usuarios',
            'password' => 'required|min:4',
        ];
    }

    public static function mensajeValidacion(): array{
        return [
            'email.required' => 'El email no debe estar vacío.',
            'password.required' => 'La contraseña no debe estar vacía.',
        ];
    }

    public static function mensajeValidacionEditar(): array{
        return [
            'nombre.required' => 'El nombre no debe estar vacío.',
            'apellidos.required' => 'El apellido no debe estar vacío.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento no debe estar vacía.',
            'email.required' => 'El email no debe estar vacío.',
            'email.unique' => 'El email ya esta en uso.',
            'nombre_usuario.required' => 'El nombre de usuario no debe estar vacío.',
            'password.required' => 'La contraseña no debe estar vacía.',
            'password.min' => 'La contraseña debe llevar al menos :min caracteres.',
        ];
    }

    public static function mensajeValidacionRegistro(): array{
        return [
            'nombre.required' => 'El nombre no debe estar vacío.',
            'apellidos.required' => 'El apellido no debe estar vacío.',
            'fecha_nacimiento.required' => 'La fecha de nacimiento no debe estar vacía.',
            'email.required' => 'El email no debe estar vacío.',
            'email.unique' => 'El email ya está en uso.',
            'nombre_usuario.required' => 'El nombre de usuario no debe estar vacío.',
            'nombre_usuario.unique' => 'El nombre ya está en uso.',
            'password.required' => 'La contraseña no debe estar vacía.',
            'password.min' => 'La contraseña debe llevar al menos :min caracteres.',
        ];
    }

    public function tipoUsuario(){
        return $this->belongsTo(TipoUsuario::class, 'tipo_fk', 'tipo_id');
    }

    public static function admin(){
        return auth()->user()->tipo_fk === 1;
    }

    public static function comun(){
        return auth()->user()->tipo_fk === 2;
    }

    public function productos(){
        return $this->belongsToMany(Producto::class,
            'usuarios_tienen_productos',
            'usuario_id',
            'producto_id',
            'usuario_id',
            'producto_id');
    }
}
