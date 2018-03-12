<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Promo::class, function (Faker $faker) {
    return [
        'imgUrl' => $faker->imageUrl(),
    ];
});
