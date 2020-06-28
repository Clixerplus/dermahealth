<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->sentence(2);

    return [
    	'ref'		  => $faker->numerify('NTC###'),
        'slug'		  => Str::slug($name),
        'name'		  => $name,
        'price'		  => $faker->numberBetween(10,100),
        'image'		  => $faker->randomElement(["nutricell.jpg", "p(1).jpg","p(2).jpg","p(3).jpg","p(4).jpg)"]),
        'category'	  => $faker->sentence(2),
        'description' => $faker->sentence(15),
        'currency'	  => 'USD',
        'stock'		  => 0,
        'stock_min'	  => 0,
        'stock_max'	  => 0,
    ];
});
