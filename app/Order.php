<?php

namespace App;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id','gestion_id','institution_id','level_id','position_id',
        'n_orden','c_interno','fecha','n_expediente','folio','nombre','ap_paterno','ap_materno',
        'o_plaza','d_plaza','lugar','distrito','provincia','accion','referencia',
        'i_vigencia','f_vigencia','status'
    ];
    protected $appends =['full_name'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function getFullNameAttribute()
    {
        return "{$this->ap_paterno} {$this->ap_materno}, {$this->nombre}";
    }
    public function getFechaAttribute($date)
    {
        return new Date($date);
    }
}
