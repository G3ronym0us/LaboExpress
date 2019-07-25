<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
    return [
        'nombres' => $faker->firstname,
        'apellidos' => $faker->lastname,
        'cedula' => $faker->numberBetween($min = 5000000, $max = 30000000),
        'sexo' => $faker->randomElement(['Masculino','Femenino']),
        'correo'=> $faker->email,
        'telefono' => $faker->phoneNumber,
        'tipo_persona' => 'Paciente'
    ];
});
