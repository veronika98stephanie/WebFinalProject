<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Item::class, function (Faker $faker) {
    return [
        'cat_id' => \App\Models\Category::all()->random()->id,
        'qty' => $faker->numberBetween(100, 150),
        'name' => $faker->name,
        'summary' => $faker->randomLetter,
        'price' => $faker->randomFloat(2, 50, 600),
        'imgUrl' => $faker->imageUrl(640,480,null,true, null, false),
    ];
});
