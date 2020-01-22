<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumno;
use App\Grupo;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'apellidos'=>$faker->lastName,
        'email'=>$faker->unique()->safeEmail,
        'telefono'=>$faker->PhoneNumber,
        'fecha_nacimiento'=>$faker->date(),
        'id_grupo'=>Grupo::inRandomOrder()->value('id')?:factory(Grupo::class),
    ];
});
