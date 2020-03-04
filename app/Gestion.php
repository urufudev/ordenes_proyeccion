<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $fillable=[
        'cod_gestion','n_resolucion','s_direccion','r_direccion','s_secretaria','r_secretaria','s_administracion','r_administracion',
        's_dgi','r_dgi','s_dgp','r_dgp','s_personal','r_personal','s_finanzas','r_finanzas',
        'status'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function provideds()
    {
        return $this->hasMany(Provided::class);
    }
}
