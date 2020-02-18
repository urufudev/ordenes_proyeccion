<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GestionUpdateRequest extends FormRequest
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

            
            'cod_gestion' => ['required', Rule::unique('gestions', 'cod_gestion')->ignore($this->route('gestion'))],
            'n_resolucion' => ['required', Rule::unique('gestions', 'n_resolucion')->ignore($this->route('gestion'))],
            
            's_direccion' =>'required',
            'r_direccion' =>'required',
            's_administracion' =>'required',
            'r_administracion' =>'required',
            's_dgi' =>'required',
            'r_dgi' =>'required',
            's_dgp' =>'required',
            'r_dgp' =>'required',
            's_personal' =>'required',
            'r_personal' =>'required',
            's_finanzas' =>'required',
            'r_finanzas' =>'required',
  
        ];
    }

    public function messages()
    {
    return [
    
        'name.required' =>'EL CAMPO NOMBRE ES OBLIGATORIO',
        'name.unique' =>'EL NOMBRE YA SE ENCUENTRA REGISTRADO',
        'description.required' => 'EL CAMPO DESCRIPCION ES OBLIGATORIO',
        
        'cod_gestion.required' =>'EL CAMPO CODIGO DE GESTIÓN ES OBLIGATORIO',
        'cod_gestion.unique' =>'EL  CODIGO DE GESTIÓN YA SE ENCUENTRA REGISTRADO',
        'n_resolucion.required' =>'EL CAMPO N° DE RESOLUCIÓN ES OBLIGATORIO',
        'n_resolucion.unique' =>'EL N° DE RESOLUCIÓN YA SE ENCUENTRA REGISTRADO',
        's_direccion.required' =>'EL CAMPO SIGLAS DE DIRECCIÓN ES OBLIGATORIO',
        'r_direccion.required' =>'EL CAMPO RESPONSABLE DE DIRECCIÓN ES OBLIGATORIO',
        's_administracion.required' =>'EL CAMPO SIGAS DE ADMINISTRACIÓN ES OBLIGATORIO',
        'r_administracion.required' =>'EL CAMPO RESPONSABLE DE ADMINISTRACIÓN ES OBLIGATORIO',
        's_dgi.required' =>'EL CAMPO SIGLAS DE DGI ES OBLIGATORIO',
        'r_dgi.required' =>'EL CAMPO RESPONSABLE DE DGI ES OBLIGATORIO',
        's_dgp.required' =>'EL CAMPO SIGLAS DE DGP ES OBLIGATORIO',
        'r_dgp.required' =>'EL CAMPO RESPONSABLE DE DGP ES OBLIGATORIO',
        's_personal.required' =>'EL CAMPO SIGLAS DE PERSONAL ES OBLIGATORIO',
        'r_personal.required' =>'EL CAMPO RESPONSABLE DE PERSONAL ES OBLIGATORIO',
        's_finanzas.required' =>'EL CAMPO SIGLAS DE FINANZAS ES OBLIGATORIO',
        'r_finanzas.required' =>'EL CAMPO RESPONSABLE DE FINANZAS ES OBLIGATORIO',
        
    ];
    }
}
