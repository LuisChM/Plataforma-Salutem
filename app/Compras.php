<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    Public function subcategories(){

        return $this->hasMany('App\Categorias', 'parent_id');
}
public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'asignar_categoria');
    }
}
