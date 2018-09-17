<?php

use Faker\Generator as Faker;

$factory->define(App\SupportType::class, function (Faker $faker) {
    return [
        'description' => $faker->randomElement($array = array('Archivo de imagen', 'Archivo de documento', 'Archivo de audio')),
        'extension' => $faker->randomElement($array = array('png', 'jpeg', 'mp4')),
        'mimetype' => $faker->randomElement($array = array('image/png', 'image/jpeg', 'audio/mp4')),
    ];
});
