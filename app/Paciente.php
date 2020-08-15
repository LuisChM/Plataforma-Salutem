<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    protected $fillable = [
        'nombre', 'apellido', 'genero', 'edad', 'correo', 'telefono', 'estadoCivil', 'trabajo', 'religion', 'motivoConsulta', 'pesoActual', 'pesoUsual', 'talla', 'cMuneca', 'cAbdomen', 'composCorporal', 'IMC', 'PI', 'pesoMeta', 'pesoUsar', 'colesterol', 'LDL', 'hemoglobina', 'HDL',
        'triglicerios', 'hematocrito', 'otros', 'APPOperaciones', 'APF', 'medicamentos', 'alergias', 'actividaFisica', 'tipo', 'frecuencia', 'suplementos', 'desayunoHora', 'desayunoAlimento', 'mmHora', 'mmAlimento', 'almuerzoHora', 'almuerzoAlimento', 'mtHora', 'mtAlimento',
        'cenaHora', 'cenaAlimento', 'cnHora', 'cnAlimento', 'total', 'observaciones', 'pregunta1', 'pregunta2', 'pregunta3', 'pregunta4', 'pregunta5', 'pregunta6', 'pregunta7', 'pregunta8', 'diagnostico', 'logrosPlan', 'deficientes', 'pesoInicial', 'pesoSeguimiento', 'imcInicial',
        'imcSeguimiento', 'grasaInicial', 'grasaSeguimiento', 'circAbdominalInicial', 'circAbdominalSeguimiento', 'requerimientoInicial', 'requerimientoSeguimiento', 'distChoInicial', 'distChoSeguimiento', 'distChonInicial', 'distChonSeguimiento', 'distGrasasInicial',
        'distGrasasSeguimiento', 'cambioPlan', 'metasObjetivos'
    ];


    //relacion user
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
