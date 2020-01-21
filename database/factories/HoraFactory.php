<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hora;
use Faker\Generator as Faker;

$factory->define(Hora::class, function (Faker $faker) {
    return [
       'hora_ini'=>$faker->time(),
       'hora_fin'=>$faker->time(),
       'dia'=>$faker->dayOfWeek($max = 'now') 
    ];
});
