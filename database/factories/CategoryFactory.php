<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    return [
        'name' => $faker->colorName,
        'slug' => Str::slug($faker->colorName),
        'image' => $faker->imageUrl(),
        'category_id' => 1,
    ];
});
