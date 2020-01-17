<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Horario;
use Faker\Generator as Faker;

$factory->define(Horario::class, function (Faker $faker) {
    return [
        'hora1'=>Hora::inRandomOrder()->value('id')?:factory(Hora::class),
        'hora2'=>Hora::inRandomOrder()->value('id')?:factory(Hora::class),
        'hora3'=>Hora::inRandomOrder()->value('id')?:factory(Hora::class),
        'hora4'=>Hora::inRandomOrder()->value('id')?:factory(Hora::class),
        'hora5'=>Hora::inRandomOrder()->value('id')?:factory(Hora::class),
    ];
});
