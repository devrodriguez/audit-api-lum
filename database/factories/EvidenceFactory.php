<?php

use Faker\Generator as Faker;

$factory->define(App\Evidence::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'url' => $faker->url,
        'finding_id' => App\Finding::all()->random()->id
    ];
});
