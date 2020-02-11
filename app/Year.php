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
}
