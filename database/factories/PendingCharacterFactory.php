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

$factory->define(App\Models\Character\PendingCharacter::class, function (Faker $faker) {

    $user = factory('App\User')->create();
    $faction_id = $faker->numberBetween(1,6);
    $origin_faction_id = $faker->numberBetween(1,6);
    $chosen_name = $faker->boolean;
    $switched = $faker->boolean;
    $ic_birth_month = $faker->numberBetween(1,12);
    $ic_birth_year = $faker->numberBetween(50,132);

    return [
        'user_id' => $user->id,
        'faction_id' => $faction_id,
        'origin_faction_id' => function() use ($switched, $faction_id, $origin_faction_id) {
            if ($switched) {
                return $origin_faction_id;
            }

            return $faction_id;
        },
        'occupation' => $faker->jobTitle,
        'first_name' => $faker->firstName,
        'chosen_name' => $faker->optional()->firstName,
        'last_name' => $faker->lastName,
        'ic_birth_month' => $ic_birth_month,
        'ic_birth_day' => $faker->numberBetween(1,31),
        'ic_birth_year' => $ic_birth_year,
        'initiation_year' => function() use ($ic_birth_month, $ic_birth_year) {
            $year = $ic_birth_year + 18;
            if ($ic_birth_month > 5) {
                $year = $year + 1;
            }

            return $year;
        },
        'age' => function() use ($ic_birth_year) {
            return 150 - $ic_birth_year;
        },
        'history' => $faker->paragraph,
        'personality' => $faker->paragraph,
        'appearance' => $faker->paragraph,
        'faceclaim' => $faker->unique()->name
    ];
});
