<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provided extends Model
{
    protected $fillable=[
        'user_id','regime_id','gestion_id','afp_id','position_id','remunerative_id',
        'workday_id','institution_id','level_id','year_id','nombre','ap_paterno','ap_materno',
        'dni','f_nacimiento','c_multired','estudios','n_expediente','c_plaza','motivo',
        'resolucion','i_contrato','f_contrato','referencia','status'
    ];
    protected $appends =['full_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function regime()
    {
        return $this->belongsTo(Regime::class);
    }

    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }
    public function afp()
    {
        return $this->belongsTo(Afp::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function remunerative()
    {
        return $this->belongsTo(Remunerative::class);
    }
    public function workday()
    {
        return $this->belongsTo(Workday::class);
    }
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function year()
    {
        return $this->belongsTo(Year::class);
    }
    public function getFullNameAttribute()
    {
        return "{$this->ap_paterno} {$this->ap_materno}, {$this->nombre}";
    }
}
