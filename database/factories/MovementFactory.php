<?php

use Faker\Generator as Faker;

$factory->define(App\Movement::class, function (Faker $faker) {
    return [
		'type' => $faker->word,
		'movement_date' => $faker->date($format = 'Y-m-d', $max = 'now'), // 
		'description' => $faker->sentence,
		'money' => $faker->numberBetween($min=1, $max=500),
		'image' => 'http://lorempixel.com/852/480',
		'category_id' => App\Category::select('id')->orderByRaw("RAND()")->first()->id,
  		'user_id' => App\User::select('id')->orderByRaw("RAND()")->first()->id,
    ];
});            