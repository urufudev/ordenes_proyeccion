<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Regime;
use Faker\Generator as Faker;

$factory->define(Regime::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(4),
        
        'description'=>$faker->text(20),
        'status'=>$faker->randomElement(['ACTIVO','INACTIVO']),
    ];
});
