<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    return [
        'parent_id' => \App\Models\Category::all()->random()->id,
        'name' => $faker->word,
    ];
});
