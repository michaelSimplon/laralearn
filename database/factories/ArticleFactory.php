<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(4),
        'contenu' => $faker->text(500)        
    ];
});
