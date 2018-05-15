<?php

use Faker\Generator as Faker;

$factory->define(App\Alumno::class, function (Faker $faker) {
    return [
      'id' => $faker->numberBetween(1,30),
      'matricula' => $faker->numberBetween(1,1000),
      'nombre' => $faker->name,
      'genero' => $faker->randomElement($array = array ('Masculino','Femenino')),
      'grado' => $faker->randomElement($array = array ('Maestría','Doctorado')),
    ];
});
