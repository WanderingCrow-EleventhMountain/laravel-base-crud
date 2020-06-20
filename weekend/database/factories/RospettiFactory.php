<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Rospetto;
use Faker\Generator as Faker;

$factory->define(Rospetto::class, function (Faker $faker) {
    return [
      'name' => $faker -> firstName(),
      'color' => $faker -> randomElement($array = array ('red', 'blue', 'green', 'yellow', 'brown', 'black', 'white')),
      'weight' => rand(2, 50),
      'dateOfBirth' => $faker -> date()
    ];
});
