<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePanel extends FormRequest
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
            'descripcion' => 'required|string',
            'precio' => 'required|int',
            //'urlfoto' => 'file|max:10000|mimes:jpeg,png,jpg',
            // 'nombre' => 'required|string',
            // 'precio' => 'required|int',
            // 'valor' => 'required',
            // 'categoria' => 'required',
            // 'cantidad' => 'required|int',
            // 'peso' => 'required',
        ];
    }
}
