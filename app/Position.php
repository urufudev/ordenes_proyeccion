<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable=[
        'name','status'
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
