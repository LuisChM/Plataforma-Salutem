<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlanNutricional extends FormRequest
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
           'pesoActual' => 'nullable',
           'porcentajeGrasa' => 'nullable',
           'kgGrasa' => 'nullable',
           'kgMasaMuscular' => 'nullable',
           'desIntercambio' => 'nullable',
           'desEjemplo' => 'nullable',
           'mmIntercambio' => 'nullable',
           'mmEjemplo' => 'nullable',
           'almIntercambio' => 'nullable',
           'almEjemplo' => 'nullable',
           'mtIntercambio' => 'nullable',
           'mtEjemplo' => 'nullable',
           'postEjercicioIntercambio' => 'nullable',
           'postEjercicioEjemplo' => 'nullable',
           'cenaIntercambio' => 'nullable',
           'cenaEjemplo' => 'nullable',
           'recomendacion' => 'nullable',
        ];
    }
}
