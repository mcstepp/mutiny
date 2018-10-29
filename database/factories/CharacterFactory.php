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

$factory->define(App\Models\Character\Character::class, function (Faker $faker) {

    $user = factory('App\User')->create();
    $faction = factory('App\Models\Character\Faction')->create();
    $chosen_name = $faker->boolean;
    $switched = $faker->boolean;
    $ic_birth_year = $faker->numberBetween(50,132);

    return [
        'user_id' => $user->id,
        'faction_id' => $faction->id,
        'origin_faction_id' => function() use ($switched, $faction) {
            if ($switched) {
                return factory('App\Models\Character\Faction')->create()->id;
            }

            return $faction->id;
        },
        'occupation' => $faker->jobTitle,
        'first_name' => $faker->firstName,
        'chosen_name' => function() use ($chosen_name, $faker) {
            if ($chosen_name) {
                return $faker->firstName;
            }

            return null;
        },
        'last_name' => $faker->lastName,
        'ic_birth_month' => $faker->numberBetween(1,12),
        'ic_birth_day' => $faker->numberBetween(1,31),
        'ic_birth_year' => $ic_birth_year,
        'initiation_year' => $faker->numberBetween(80,150),
        'age' => function() use ($ic_birth_year) {
            return 150 - $ic_birth_year;
        },
        'history' => $faker->paragraph,
        'personality' => $faker->paragraph,
        'appearance' => $faker->paragraph,
        'face_claim' => $faker->unique()->name,

    ];
});
