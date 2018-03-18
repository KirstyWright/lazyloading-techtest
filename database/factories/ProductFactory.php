<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $animal = $faker->randomElement(['cats','people']);
    $categoryIndex = ['cats'=>1,'people'=>2];
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'image_url' => $faker->imageUrl(250, 150, $animal),
        'category_id' => $categoryIndex[$animal]
    ];
});
