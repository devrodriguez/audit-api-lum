<?php

use Faker\Generator as Faker;

$factory->define(App\Audit::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence(6),
        'auditor_id' => App\Auditor::all()->random()->id,
        'enterprise_id' => App\Enterprise::all()->random()->id
    ];
});
