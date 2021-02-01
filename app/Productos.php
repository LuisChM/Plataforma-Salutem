<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Productos extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    public $fillable = ['nombre', 'cantidad', 'unidad_de_medida'];



}
