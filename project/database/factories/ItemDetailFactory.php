<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\ItemDetail::class, function (Faker $faker) {

    return [
        'item_id' => \App\Models\Item::all()->random()->id,
        'key' => $faker->word,
        'value' => $faker->colorName,
    ];
});
