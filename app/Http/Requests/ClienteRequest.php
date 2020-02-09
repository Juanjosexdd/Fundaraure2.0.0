<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'cedula' => 'required|max:20',
            'rif' => 'required|max:20',
            'nombres' => 'required|max:150',
            'apellidos' => 'required|max:150',
            'telefono' => 'required|max:20',
            'email' => 'required|max:50|email|unique:clientes',
            'direccion' => 'required|max:120',
            'codsector' => 'required',
            'codtipocliente' => 'required',

        ];
    }
}
