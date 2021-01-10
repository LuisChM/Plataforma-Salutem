<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contabilidad extends Model
{
    public $fillable = ['ingresos', 'descripcion','gastos', 'fecha', 'total'];

}
