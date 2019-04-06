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

$factory->define(App\Models\Character\Industry::class, function (Faker $faker) {
    $faction_id = $faker->numberBetween(1,6);

    return [
        'faction_id' => $faction_id,
        'name' => $faker->word,
        'description' => $faker->paragraph(5)
    ];
});
