<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id','gestion_id','institution_id','year_id','level_id','position_id',
        'n_orden','fecha','n_expediente','folio','nombre','ap_paterno','ap_materno',
        'o_plaza','d_plaza','lugar','distrito','provincia','accion','referencia',
        'i_vigencia','f_vigencia','status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
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
}
