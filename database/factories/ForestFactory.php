<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Forests;
use Faker\Generator as Faker;

$factory->define(Forests::class, function (Faker $faker) {
    return [
        'name'          => $faker->unique()->company,
        'description'   => $faker->sentence,
        'country'       => $faker->country,
        'location'      => $faker->city,
        'large'         => $faker->randomDigit,
    ];
});
