<?php

use App\Tarea;
use Faker\Generator as Faker;

$factory->define(Tarea::class, function (Faker $faker) {
    return [
        'tarea' => $faker->sentence(10),
        'user_id' => 1,
        'completed' => 0,
    ];
});
