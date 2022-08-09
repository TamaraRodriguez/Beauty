<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//La clase asume que el nombre Articulo se relaciona con el nombre de la tabla "articulos" en la BBDD
class Articulo extends Model
{
    //use HasFactory;
    protected $table = 'articulos';
    protected $primaryKey = 'articulo_id';
    protected $fillable = ['titulo', 'fecha_publicacion', 'contenido', 'imagen_contenido', 'imagen_portada'];

    //Reglas de validación
    public static function reglas(): array
    {
        return [
            //Pasamos los campos a validar
            'titulo' => 'required|min:2',
            'fecha_publicacion' => 'required|date_format:Y-m-d',
            'contenido' => 'required|min:80',
            //'imagen_portada' => 'required',
        ];
    }

    public static function mensajeValidacion(): array
    {
        return [
            'titulo.required' => 'El título no debe estar vacío.',
            'titulo.min' => 'El titulo no debe contener menos de :min caracteres.',
            'fecha_publicacion.required' => 'La fecha de publicación no debe estar vacía.',
            'fecha_publicacion.date_format' => 'La fecha no tiene el formato indicado. Ejmeplo: 2021-12-01.',
            'contenido.required' => 'El artículo debe llevar una descripción o contenido escrito.',
            'contenido.min' => 'El contenido no debe llevar menos de :min caracteres.',
            //'imagen_portada.required' => 'La imagen de portada no debe estar vacía',
        ];
    }

    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class,
            'articulos_tienen_etiquetas',
            'articulo_id',
            'etiqueta_id',
            'articulo_id',
            'etiqueta_id');
    }
}
