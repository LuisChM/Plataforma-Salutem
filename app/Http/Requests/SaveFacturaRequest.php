<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveFacturaRequest extends FormRequest
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
            'nombre' => 'required',
            'telefono' => 'nullable',
            'correo' => 'nullable',
            'descripcion' => 'nullable',
            'fecha' => 'required',
            'total' => 'required',
            'imagen' => 'nullable|image',
        ];
    }
}
