<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $cat = Category::first();
    return [
     
        'imagePath' => '/images/'.rand(1,6).'.png',
        'category_id' => $cat->id,
        'title' =>$faker->name,
        'description'=>$faker->text,
        'price' => rand(1.0,5000.0),

    ];
});
