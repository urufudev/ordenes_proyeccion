<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            
            'user_id' => 'required',
            'gestion_id' => 'required',
            
            'institution_id'=> 'required',
            'level_id' => 'required',
            'position_id' => 'required',
            
            'fecha' =>'required',
            'n_expediente' =>'required',
            'folio' =>'required',
            'nombre' =>'required',
            'ap_paterno' =>'required',
            'ap_materno' =>'required',
            'accion' =>'required',
            'referencia' =>'required',

        ];
    }

    public function messages()
    {
    return [
    
        'gestion_id.required' =>'EL CAMPO GESTION ES OBLIGATORIO',
        
        'gestion_id.required' =>'EL CAMPO INSTITUCION ES OBLIGATORIO',
        'level_id.required' =>'EL CAMPO NIVEL ES OBLIGATORIO',
        'position_id.required' =>'EL CAMPO CARGO ES OBLIGATORIO',
        'fecha.required' =>'EL CAMPO FECHA ES OBLIGATORIO',
        'n_expediente.required' =>'EL CAMPO NUMERO DE SISGEDO ES OBLIGATORIO',
        'nombre.required' =>'EL CAMPO NOMBRE ES OBLIGATORIO',
        'ap_paterno.required' =>'EL CAMPO APELLIDO PATERNO ES OBLIGATORIO',
        'ap_materno.required' =>'EL CAMPO APELLIDO MATERNO ES OBLIGATORIO',
        'accion.required' =>'EL CAMPO ACCIÓN ES OBLIGATORIO',
        'referencia.required' =>'EL CAMPO REFERENCIA ES OBLIGATORIO',
        

        ];
    }
}
