<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //use HasFactory;
    protected $table = 'compras_tienen_productos';
    protected $fillable = ['compra_id', 'producto_id'];
}
