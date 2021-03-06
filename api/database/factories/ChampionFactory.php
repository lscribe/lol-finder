<?php

use App\Models\Champion;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Champion::class, function (Faker $faker) {
    return [
        'id'    => $faker->firstName(),
        'title' => $faker->word(),
        'lore'  => $faker->sentence(),
        'image' => $faker->imageUrl(),
        'tags'  => $faker->word()
        ];
});
