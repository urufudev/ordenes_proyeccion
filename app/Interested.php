<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interested extends Model
{
    protected $fillable=[
        'dni','name','ap_paterno','ap_materno','status'
    ];
    protected $appends =['full_name'];
    
    public function resolutions()
    {
        return $this->belongsToMany(Resolution::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->ap_paterno} {$this->ap_materno}, {$this->name}";
    }
}
