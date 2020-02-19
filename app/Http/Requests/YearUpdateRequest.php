<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class YearUpdateRequest extends FormRequest
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
            
            
            'name' => ['required', Rule::unique('years', 'name')->ignore($this->route('year'))],

            'description' =>'required'
            
            
        ];
    }

    public function messages()
    {
    return [
    
        'name.required' =>'EL CAMPO NOMBRE ES OBLIGATORIO',
        'name.unique' =>'EL NOMBRE YA SE ENCUENTRA REGISTRADO',
        'description.required' => 'EL CAMPO DESCRIPCION ES OBLIGATORIO',
        
        ];
    }
}
