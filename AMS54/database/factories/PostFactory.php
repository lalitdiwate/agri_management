<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Post::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence(),
        'body' => $faker->text(),
        'slug' => $faker->name(),
         'category' => $faker->name(),
          
    ];
});
