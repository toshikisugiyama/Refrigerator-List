<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Refrigerator;
use App\User;
use Faker\Generator as Faker;

$factory->define(Refrigerator::class, function (Faker $faker) {
    return [
        'user_id' => User::first()->id,
        'rows' => $faker->randomDigit,
    ];
});
