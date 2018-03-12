<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Cart::class, function (Faker $faker) {

    return [
        'clientId' => \App\Models\Client::all()->random()->id,
        'itemId' => \App\Models\Item::all()->random()->id,
        'qty' => $faker->numberBetween(0,10),
    ];
});
