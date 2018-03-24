<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $title = $faker->sentence($nbWords = 6, $variableNbWords = true),
        'slug' => str_slug($title),
        'description' => $faker->text,
    ];
});
