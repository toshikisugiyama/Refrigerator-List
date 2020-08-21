<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use App\Refrigerator;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    $max_row = Refrigerator::first()->rows;
    return [
        'refrigerator_id' => Refrigerator::first()->id,
        'row' => $faker->numberBetween($min = 1, $max = $max_row),
        'column' => $faker->randomDigit,
        'name' => $faker->text(5),
        'expiration_date' => $faker->dateTime($min = 'now'),
        'photo_url' => $faker->imageUrl($width = 400, $height = 400, 'food')
    ];
});
