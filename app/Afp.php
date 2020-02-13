<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afp extends Model
{
    protected $fillable=[
        'name','description','status'
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
