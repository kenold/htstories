<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'photo_path' => $faker->imageUrl($width=400, $height=600, 'people'),
        'company' => $faker->company,
        'job_title' => $faker->jobTitle,
        'sex' => $faker->randomElement($array = array ('M','F')),
        'place_origin' => $faker->country,
        'bio' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),        
        'created_at' => NOW(),
        'updated_at' => NOW(),
    ];
});
