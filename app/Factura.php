<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Factura extends Model
{
   protected $fillable =['nombre', 'fecha', 'total'];

}
