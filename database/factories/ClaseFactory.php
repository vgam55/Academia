<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clase;
use App\Profesor;
use App\Grupo;
use Faker\Generator as Faker;

$factory->define(Clase::class, function (Faker $faker) {
    return [
    	'nombre_clase'=>$faker->sentence(2),
        'id_profesor'=>Profesor::inRandomOrder()->value('id')?:factory(Profesor::class),
        'id_grupo'=>Grupo::inRandomOrder()->value('id')?:factory(Grupo::class),
    ];
});
