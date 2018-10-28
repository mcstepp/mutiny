<?php

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

$factory->define(App\Models\Forum\Forum::class, function (Faker $faker) {
    return [
        'category_id' => function() {
            return factory('App\Models\Forum\Category')->create()->id;
        },
        'name' => $faker->unique()->city,
        'description' => $faker->paragraph(5),
        'private' => $faker->boolean,
        'ic' => $faker->boolean
    ];
});
