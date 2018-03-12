<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\PurchaseList::class, function (Faker $faker) {
    return [
        'purchaseId' => \App\Models\Purchase::all()->random()->id,
        'itemId' => \App\Models\Item::all()->random()->id,
        'qty' => $faker->randomDigit(1,5),
    ];
});
