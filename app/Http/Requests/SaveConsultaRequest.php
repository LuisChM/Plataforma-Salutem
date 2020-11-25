<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveConsultaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'nullable|unique:pacientes',
            'nombre' => 'nullable',
            'apellido' => 'nullable',
            'genero' => 'nullable',
            'edad' => 'nullable',
            'correo' => 'nullable',
            'telefono' => 'nullable',
            'estadoCivil' => 'nullable',
            'trabajo' => 'nullable',
            'religion' => 'nullable',
            'motivoConsulta' => 'nullable',
            'pesoActual' => 'nullable',
            'pesoUsual' => 'nullable',
            'talla' => 'nullable',
            'cMuneca' => 'nullable',
            'cAbdomen' => 'nullable',
            'composCorporal' => 'nullable',
            'IMC' => 'nullable',
            'PI' => 'nullable',
            'pesoMeta' => 'nullable',
            'pesoUsar' => 'nullable',
            'colesterol' => 'nullable',
            'LDL' => 'nullable',
            'hemoglobina' => 'nullable',
            'HDL' => 'nullable',
            'triglicerios' => 'nullable',
            'hematocrito' => 'nullable',
            'otros' => 'nullable',
            'APPOperaciones' => 'nullable',
            'APF' => 'nullable',
            'medicamentos' => 'nullable',
            'alergias' => 'nullable',
            'actividaFisica' => 'nullable',
            'tipo' => 'nullable',
            'frecuencia' => 'nullable',
            'suplementos' => 'nullable',
            'desayunoHora' => 'nullable',
            'desayunoAlimento' => 'nullable',
            'mmHora' => 'nullable',
            'mmAlimento' => 'nullable',
            'almuerzoHora' => 'nullable',
            'almuerzoAlimento' => 'nullable',
            'mtHora' => 'nullable',
            'mtAlimento' => 'nullable',
            'cenaHora' => 'nullable',
            'cenaAlimento' => 'nullable',
            'cnHora' => 'nullable',
            'cnAlimento' => 'nullable',
            'total' => 'nullable',
            'observaciones' => 'nullable',
            'pregunta1' => 'nullable',
            'pregunta2' => 'nullable',
            'pregunta3' => 'nullable',
            'pregunta4' => 'nullable',
            'pregunta5' => 'nullable',
            'pregunta6' => 'nullable',
            'pregunta7' => 'nullable',
            'pregunta8' => 'nullable',
            'diagnostico' => 'nullable',
        ];
    }
}
