<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionStoreRequest extends FormRequest
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
            'codigo' =>'required|unique:institutions,codigo',

            'nombre' =>'required',
            'nivel' =>'required',
            
            
  
        ];
    }

    public function messages()
    {
    return [
    
        'codigo.required' =>'EL CAMPO CODIGO ES OBLIGATORIO',
        'codigo.unique' =>'EL CODIGO YA SE ENCUENTRA REGISTRADO',
        'nombre.required' => 'EL CAMPO NOMBRE ES OBLIGATORIO',
        'nivel.required' => 'EL CAMPO NIVEL ES OBLIGATORIO',

        
    ];
    }
}
