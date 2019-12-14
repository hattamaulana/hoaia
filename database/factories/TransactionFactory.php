<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Donations;
use App\Models\Transactions;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Transactions::class, function (Faker $faker) {
    $user = User::all()->pluck('id')->toArray();
    $donation = Donations::all()->pluck('id')->toArray();

    return [
        'user_id'       => $faker->randomElement($user),
        'donation_id'   => $faker->randomElement($donation),
        'type'          => $faker->randomElement(['benih', 'uang']),
        'endowment'     => $faker->randomDigit,
    ];
});
