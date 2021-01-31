<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planNutricional extends Model
{
    protected $fillable = [
        'pesoActual', 'porcentajeGrasa', 'kgGrasa', 'kgMasaMuscular', 'desIntercambio', 'desEjemplo', 'mmIntercambio', 'mmEjemplo', 'almIntercambio', 'almEjemplo', 'mtIntercambio', 'mtEjemplo', 'postEjercicioIntercambio', 'postEjercicioEjemplo', 'cenaIntercambio', 'cenaEjemplo','recomendacion'
        
    ];
        public function user()
    
        {
        $this->belongsTo(Paciente::class);
    }

}
