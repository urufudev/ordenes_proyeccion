<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Year;
use Faker\Generator as Faker;

$factory->define(Year::class, function (Faker $faker) {
    return [
        /* 'name'=>$faker->year($max = 'now'),
        'description'=>$faker->sentence,
        'status'=>$faker->randomElement(['ACTIVO','INACTIVO']), */
    ];
});
