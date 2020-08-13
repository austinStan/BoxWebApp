<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
     'name'=>$faker->word(2),
     'slug'=>$faker->slug,
     'description'=>$faker->sentence(10),
     'image'=>'images/img.png',
     'price'=>$faker->numberBetween(400,2000),
     'created_at'=>now(),
     'updated_at'=>now(),
    ];
});
