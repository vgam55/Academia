<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tema;
use Faker\Generator as Faker;

$factory->define(Tema::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->sentence(5),
        'descripcion'=>$faker->sentence(15),
        'horas'=>$faker->numberBetween($min = 5, $max = 32),
    ];
});
