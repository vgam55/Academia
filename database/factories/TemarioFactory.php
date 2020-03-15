<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Temario;
use Faker\Generator as Faker;
use App\Tema;
$factory->define(Temario::class, function (Faker $faker) {
    return [
        'nombre_temario'=>$faker->sentence(2),
        'tema_1'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_2'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_3'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_4'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_5'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_6'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_7'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_8'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_9'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_10'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_11'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_12'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_13'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_14'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
        'tema_15'=>Tema::inRandomOrder()->value('id')?:factory(Tema::class),
    ];
});
