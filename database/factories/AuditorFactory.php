<?php

use Faker\Generator as Faker;

$factory->define(App\Auditor::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName($gender='male'),
        'email' => $faker->unique()->safeEmail,
        'role_id' => $faker->randomFloat($nbMaxDecimals = 0, $min = 1, $max = 3)
    ];
});
