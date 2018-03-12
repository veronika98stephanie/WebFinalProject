<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\CatDetail::class, function (Faker $faker) {
    return [
        'cat_id' => \App\Models\Category::all()->random()->id,
        'key' => $faker->word,
    ];
});
