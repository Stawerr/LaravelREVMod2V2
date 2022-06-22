<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'brand_id' => rand(1, 10),
        'owner_id' => rand(1, 30),
        'registration' => $faker->city,
        'year_of_manufacture' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'color' => $faker->colorName,
    ];
});
