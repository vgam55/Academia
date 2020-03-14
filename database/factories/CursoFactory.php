<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Curso;
use App\Clase;
use App\Temario;
use App\Horario;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
    return [
    	//Profesor::inRandomOrder()->value('id')::factory(Profesor::class),
    	'nombre_curso'=>$faker->sentence(2);
        'id_clase'=>Clase::inRandomOrder()->value('id')?:factory(Clase::class),
        'id_temario'=>Temario::inRandomOrder()->value('id')?:factory(Temario::class),
        'id_horario'=>Horario::inRandomOrder()->value('id')?:factory(Horario::class),
    ];
});
