<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    $title=$faker->sentence(4);
    return [
        'name'=>$title,
        'description'=>$faker->text(12),
        'status'=>$faker->randomElement(['ACTIVO','INACTIVO']),
    ];
});
