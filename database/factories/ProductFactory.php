<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
     'name'=>$faker->word(2),
     'brand'=>$faker->word(6),
     'slug'=>$faker->slug,
     'location'=>$faker->state,
     'description'=>$faker->sentence(10),
     'image'=>'images/img.png',
     'size'=>$faker->randomDigit,
     'quantity'=>$faker->randomDigit,
     'weight'=>$faker->randomDigit,
     'dimensions'=>$faker->randomDigit,
     'price'=>$faker->numberBetween(400,2000),
     'created_at'=>now(),
     'updated_at'=>now(),
    ];
});
