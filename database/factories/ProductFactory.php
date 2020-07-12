<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use App\Model\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'slug' => Str::slug($faker->title),
        'description' => $faker->paragraph,
        'price' => $faker->unique()->numberBetween($min = 10, $max = 500),
        'sale_price' => $faker->unique()->numberBetween($min = 10, $max = 500),
        'image' => $faker->imageUrl(),
        'category_id' => 1,
    ];
});
