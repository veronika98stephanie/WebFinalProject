<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Purchase::class, function (Faker $faker) {
    return [
        'clientId' => \App\Models\Client::all()->random()->id,
        'paymentMethodId' => \App\Models\PaymentMethod::all()->random()->id,
        'statusId' => \App\Models\Status::all()->random()->id,
        'date' => $faker->dateTime,
    ];
});
