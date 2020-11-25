<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePlanNutricional extends FormRequest
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
            'desLunes' => 'nullable',
            'mMatLunes' => 'nullable',
            'almLunes' => 'nullable',
            'mMerLunes' => 'nullable',
            'cenLunes' => 'nullable',
            'desMartes' => 'nullable',
            'mMatMartes' => 'nullable',
            'almMartes' => 'nullable',
            'mMerMartes' => 'nullable',
            'cenMartes' => 'nullable',
            'desMiercoles' => 'nullable',
            'mMatMiercoles' => 'nullable',
            'almMiercoles' => 'nullable',
            'mMerMiercoles' => 'nullable',
            'cenMiercoles' => 'nullable',
            'desJueves' => 'nullable',
            'mMatJueves' => 'nullable',
            'almJueves' => 'nullable',
            'mMerJueves' => 'nullable',
            'cenJueves' => 'nullable',
            'desViernes' => 'nullable',
            'mMatViernes' => 'nullable',
            'almViernes' => 'nullable',
            'mMerViernes' => 'nullable',
            'cenViernes' => 'nullable',
            'desSabado' => 'nullable',
            'mMatSabado' => 'nullable',
            'almSabado' => 'nullable',
            'mMerSabado' => 'nullable',
            'cenSabado' => 'nullable',
            'desDomingo' => 'nullable',
            'mMatDomingo' => 'nullable',
            'almDomingo' => 'nullable',
            'mMerDomingo' => 'nullable',
            'cenDomingo' => 'nullable',
    
        ];
    }
}
