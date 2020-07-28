<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $fillable = ['nombre', 'categoria', 'cantidad', 'unidad_de_medida'];
}
