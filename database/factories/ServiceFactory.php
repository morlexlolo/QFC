<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
	$title = $faker->sentence;
    return [
        //
        'title' 	=> $title,
        'image' 	=> $faker->imageUrl($width = 1000, $height = 398),
        'content'   => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'slug' 		=> str_slug($title),
    ];
});
