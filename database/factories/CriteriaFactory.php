<?php

use Faker\Generator as Faker;

$factory->define(App\Criteria::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'description' => $faker->paragraph
    ];
});
