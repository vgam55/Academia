<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Temario;
use Faker\Generator as Faker;
use App\Tema;
$factory->define(Temario::class, function (Faker $faker) {
    return [
        'tema_1'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_2'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_3'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_4'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_5'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_6'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_7'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_8'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_9'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_10'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_11'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_12'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_13'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_14'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
        'tema_15'=>Tema::inRamdomOrder()->value('id')?:factory(Tema::class),
    ];
});
