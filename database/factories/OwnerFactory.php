<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Owner;
use Faker\Generator as Faker;

$factory->define(Owner::class, function (Faker $faker) {
    return [
        'country_id' => rand(1, 4),
        'name' => $faker->firstName,
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'wallet_money' => $faker->randomFloat(2,1,500),
    ];
});
