<?php

use Faker\Generator as Faker;

$factory->define(App\Finding::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'criteria_id' => 1
    ];
});
