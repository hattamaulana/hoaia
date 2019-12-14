<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Message;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    $user = User::all()->pluck('id')->toArray();

    return [
        'from_user_id'  => $faker->randomElement($user),
        'to_user_id'    => $faker->randomElement($user),
        'subject'       => $faker->sentence,
        'message'       => $faker->paragraph,
    ];
});
