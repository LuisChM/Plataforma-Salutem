<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveLogroPaciente extends FormRequest
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
            'logrosPlan' => 'nullable',
            'deficientes' => 'nullable',
            'pesoInicial' => 'nullable',
            'imcInicial' => 'nullable',
            'grasaInicial' => 'nullable',
            'circAbdominalInicial' => 'nullable',
            'requerimientoInicial' => 'nullable',
            'distChoInicial' => 'nullable',
            'distChonInicial' => 'nullable',
            'distGrasasInicial' => 'nullable',
            'cambioPlan' => 'nullable',
            'metasObjetivos' => 'nullable'        
        ];
    }
}
