<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvidedStoreRequest extends FormRequest
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
            'year_id' => 'required',

            'regime_id' => 'required',
            'workday_id' => 'required',
            'institution_id'=> 'required',
            'level_id' => 'required',
            'position_id' => 'required',
            
            'nombre' =>'required',
            'ap_paterno' =>'required',
            'ap_materno' =>'required',
            't_documento' =>'required',
            'n_documento' =>'required|min:8|max:11',
            
            'f_nacimiento' =>'required',
            'n_expediente' =>'required',
            'c_plaza' =>'required',
            
            'motivo' =>'required',
            'referencia' =>'required',

        ];
    }

    public function messages()
    {
    return [
    
        'gestion_id.required' =>'EL CAMPO GESTION ES OBLIGATORIO',
        'year_id.unique' =>'EL CAMPO AÑO ES OBLIGATORIO',
        
        'regime_id.required' =>'EL CAMPO REGIMEN ES OBLIGATORIO',
        'workday_id.required' =>'EL CAMPO JORNADA DE TRABAJO ES OBLIGATORIO',
        'institution_id.required' =>'EL CAMPO INSTITUCION ES OBLIGATORIO',
        'level_id.required' =>'EL CAMPO NIVEL ES OBLIGATORIO',
        'position_id.required' =>'EL CAMPO CARGO ES OBLIGATORIO',
    
        'nombre.required' =>'EL CAMPO NOMBRE ES OBLIGATORIO',
        'ap_paterno.required' =>'EL CAMPO APELLIDO PATERNO ES OBLIGATORIO',
        'ap_materno.required' =>'EL CAMPO APELLIDO MATERNO ES OBLIGATORIO',
        't_documento.required' =>'EL CAMPO TIPO DE DOCUMENTO ES OBLIGATORIO',
        'n_documento.required' =>'EL CAMPO NUMERO DE DOCUMENTO ES OBLIGATORIO',
        'n_documento.min' =>'EL CAMPO NUMERO DE DOCUMENTO REQUIERE MINIMO 8 DIGITOS',
        'n_documento.max' =>'EL CAMPO NUMERO DE DOCUMENTO REQUIERE MAXIMO 11 DIGITOS',
        'f_nacimiento.required' =>'EL CAMPO FECHA DE NACIMIENTO ES OBLIGATORIO',
        'n_expediente.required' =>'EL CAMPO NUMERO DE SISGEDO ES OBLIGATORIO',
        'c_plaza.required' =>'EL CAMPO CODIGO DE PLAZA ES OBLIGATORIO',

        'motivo.required' =>'EL CAMPO MOTIVO ES OBLIGATORIO',
        'referencia.required' =>'EL CAMPO REFERENCIA ES OBLIGATORIO',
        

        ];
    }
}
