<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->user_id,
        'title' => $faker->unique()->title,
        'body' => $faker->body,
        'quotation_price' => $faker->quotation_price,
        'phone_number' => $faker->phone_number,
        'location' => $faker->location,
        'cover_image' => $faker->cover_image


    ];
});
