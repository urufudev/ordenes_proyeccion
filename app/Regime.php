<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regime extends Model
{
    protected $fillable=[
        'name','description','status'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function provideds()
    {
        return $this->hasMany(Provided::class);
    }
}
