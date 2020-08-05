<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    public $fillable = ['nombre_usuario', 'nombre_comida', 'cantidad', 'direccion','precio'];
}
