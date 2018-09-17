<?php

use Faker\Generator as Faker;

$factory->define(App\Enterprise::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'nit' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'web_url' => $faker->url
    ];
});
