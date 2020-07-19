<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['nombre','display_nombre','descripcion'];

    public function user(){
        return $this->hasMany(User::class);
    }
}
