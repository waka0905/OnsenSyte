<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Syte;
use Faker\Generator as Faker;

$factory->define(Syte::class, function (Faker $faker) {
    return [
    'title' => $faker->word,
    'body' => $faker->text($maxNbChars = 6),
    ];
});
