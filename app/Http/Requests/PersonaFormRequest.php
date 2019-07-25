<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'cedula' => 'required|max:20',
            'sexo' => 'required|max:15',
            'correo' => 'max:50',
            'telefono' => 'max:20',
            'tipo_persona' => 'required|max:20',
        ];
    }
}
