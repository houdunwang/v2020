<?php

use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'content' => $faker->text(100),
        'user_id' => $faker->randomElement([1, 2, 3])
    ];
});
