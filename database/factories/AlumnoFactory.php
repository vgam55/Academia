<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellidos'=>$faker->lastName,
        'email'=>$faker->unique()->safeEmail,
        'telefono'=>$faker->tollFreePhoneNumber,
        'fecha_nacimiento'=>$faker->date(),
    ];
});
