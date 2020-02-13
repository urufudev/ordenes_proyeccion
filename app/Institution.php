<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable=[
        'codigo','modular','nombre','nivel','ugel','provincia','distrito',
        'lugar','status'
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
