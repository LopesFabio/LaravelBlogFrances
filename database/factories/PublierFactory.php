<?php

use App\Models\Publier;
use Faker\Generator as Faker;

$factory->define(Publier::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'titre' => $faker->word,
        'contenu' => $faker->sentence(),
    ];
});
