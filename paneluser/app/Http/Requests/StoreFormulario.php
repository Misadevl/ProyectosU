<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormulario extends FormRequest
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
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email',
            'lugar' => 'required|string',
            'pais' => 'string',
            'ciudad' => 'required|string',
            'direccion' => 'required|string',
            'codigo' => 'string',
            'telefono' => 'required|int',
            'dni' => 'int',
            'tipo' => 'required',
            'producto' => 'required|string',
            // 'kg'=>'int',
            // 'tonelada'=>'int',
            'cuenta' => 'int',
        ];
    }
}
