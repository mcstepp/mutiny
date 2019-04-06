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

$factory->define(App\Models\Character\IndustryJob::class, function (Faker $faker) {
    $industry_id = $faker->numberBetween(1,40);
    $occupancy = $faker->numberBetween(1,99);

    return [
        'industry_id' => $industry_id,
        'name' => $faker->word,
        'description' => $faker->paragraph(3),
        'occupancy' => $occupancy
    ];
});
