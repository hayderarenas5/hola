<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registro_usuario_beRequest extends FormRequest
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
            //
            'correo'=>"required|unique:usuarios, correo",
            'usuario'=>"required|unique:usuarios, usuarios",
            'contraseña'=>"require|min:8",
        ];
    }
}
