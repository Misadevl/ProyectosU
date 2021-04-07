<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuario extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Debe ingresar el Nombre',
            'email.required' => 'Debe ingresar el @email',
            'password.required' => 'Debe ingresar la contraseña',

        ];
    }
}
