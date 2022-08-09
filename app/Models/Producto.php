<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'producto_id';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock', 'imagen'];

}
