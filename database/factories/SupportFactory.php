<?php

use Faker\Generator as Faker;
use App\SupportType;

$factory->define(App\Support::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'url' => $faker->url,
        'support_type_id' => SupportType::all()->random()->id
    ];
});
