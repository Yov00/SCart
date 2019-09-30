<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
     
        'imagePath' => '/images/'.rand(1,6).'.png',
        'title' =>$faker->name,
        'description'=>$faker->text,
        'price' => rand(1.0,5000.0),

    ];
});
