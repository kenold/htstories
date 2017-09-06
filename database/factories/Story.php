<?php

use Faker\Generator as Faker;

$factory->define(App\Story::class, function (Faker $faker) {
    return [
        'date' => NOW(),
        'person_id' => function() {
            return factory(App\Person::class)->create()->id;
        },
        'cover_path' => $faker->imageUrl($width=800, $height=400, 'people'),
        'summary' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'video_url' => 'https://www.youtube.com/watch?v=XKu_SEDAykw',
        'language' => 'English',
        'created_at' => NOW(),
        'updated_at' => NOW(),
    ];
});
