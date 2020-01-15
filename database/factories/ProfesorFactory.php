<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellidos'=>$faker->lastName,
        'email'=>$faker->safeEmail,
        'telefono'=>$faker->tollFreePhoneNumber,
        'titulo'=>$faker->sentence(3),
    ];
});
