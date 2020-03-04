<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;

class Resolution extends Model
{
    use Taggable;

    protected $fillable=[
        'user_id','order_id','n_resolucion','fecha','n_persona','accion','file','notificado','status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
