<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresasRequest extends FormRequest
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
        return 
        [
        
            'razon_social'=>'required|regex:/^[\pL\s\-]+$/u',
            'rfc'=>'required',
            'nombre_comercial'=>'required',
            'direccion'=>'',
            'telefono'=>'integer|digits_between:1,12'

        ];
    }

    public function messages()
    {
        return 
        [

            'razon_social.required'=>'La razón social es obligatoria',
            'razon_social.alpha'=>'La razón social deben ser solo letras'

        ];
    }
}
