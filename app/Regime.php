<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regime extends Model
{
    protected $fillable=[
        'name','description','status'
    ];

    
    public function provideds()
    {
        return $this->hasMany(Provided::class);
    }
}
