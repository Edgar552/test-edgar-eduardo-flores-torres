<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactosRequest extends FormRequest
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
            'nombre_completo'=>'required|regex:/^[\pL\s\-]+$/u',
            'id_empresa'=>'required',
            'correo_electronico'=>'',
            'telefono'=>'integer|digits_between:1,12',
            'cargo'=>'required|regex:/^[\pL\s\-]+$/u'
        ];
    }
}
