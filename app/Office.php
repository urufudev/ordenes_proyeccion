<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable=[
        'name','description','status'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
   
}
