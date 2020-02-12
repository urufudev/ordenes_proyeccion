<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'office_id'=>rand(1,20),
        'regime_id'=>rand(1,20),
        'name' => $faker->name,
        
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'dni'=>$faker->numberBetween($min = 10000000, $max = 99999999),
        'ap_paterno'=>$faker->lastName,
        'ap_materno'=>$faker->lastName,
        'gender'=>$faker->randomElement(['MASCULINO','FEMENINO']),
        'f_birth'=>$faker->dateTime($max = 'now', $timezone = null),
        
        'position'=>$faker->text(10),
        'phone'=>$faker->phoneNumber,
        
        'status'=>$faker->randomElement(['ACTIVO','INACTIVO']),

        'remember_token' => Str::random(10),
    ];
});
