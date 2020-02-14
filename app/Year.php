<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;

class Year extends Model
{
    use HasRolesAndPermissions;

    protected $fillable = [
        'name', 'description', 'status',
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
