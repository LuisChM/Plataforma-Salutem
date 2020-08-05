<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public $guarded = [];
    Public function subcategories(){

        return $this->hasMany('App\Categorias');
}
}

