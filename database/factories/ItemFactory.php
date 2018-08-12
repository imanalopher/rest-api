<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Item::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'key' => $faker->text(40),
    ];
});
