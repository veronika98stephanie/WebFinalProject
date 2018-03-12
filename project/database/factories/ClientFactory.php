<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => $faker->password,
        'accessToken' => $faker->randomLetter,
        'address' => $faker->address,
        'phone' => $faker->numberBetween(000000000,1111111111),
    ];
});
