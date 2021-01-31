<?php

namespace App;
use App\Observers\UserObserver;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $fillable = ['nombre', 'cantidad', 'unidad_de_medida'];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

}
