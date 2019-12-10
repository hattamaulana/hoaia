<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Forests;
use App\Models\Donations;
use Faker\Generator as Faker;

$factory->define(Donations::class, function (Faker $faker) {
    $forest = Forests::all()->pluck('id')->toArray();

    return [
        'title'         => $faker->sentence,
        'description'   => $faker->paragraph,
        'plant'         => $faker->randomDigit,
        'money'         => $faker->numberBetween($min = 10000, $max = 100000),
        'forest_id'     => $faker->randomElement($array = $forest),
    ];
});
