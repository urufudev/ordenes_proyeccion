<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InterestedStoreRequest extends FormRequest
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
            'name' =>'required',
            'ap_paterno' =>'required',
            'ap_materno' =>'required',

        ];
    }

    public function messages()
    {
    return [
    
        'name.required' =>'EL CAMPO NOMBRE ES OBLIGATORIO',
        'ap_paterno.required' =>'EL CAMPO APELLIDO PATERNO ES OBLIGATORIO',
        'ap_materno.required' =>'EL CAMPO APELLIDO MATERNO ES OBLIGATORIO',

        ];
    }
}
