<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Examen;
use Faker\Generator as Faker;

$factory->define(Examen::class, function (Faker $faker) {
    return [
    	'nombre' => $faker->word,
    	'descripcion' => $faker->text($maxNbChars = 50),
    	'costo' => $faker->numberBetween($min = 1000, $max = 100000)
    ];
});
