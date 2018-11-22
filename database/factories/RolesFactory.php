<?php

use Faker\Generator as Faker;
use App\Models\User\Role;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'name' => function() use ($faker) {
            $roles = ['New Member', 'Member', 'Global Moderator', 'Admin', 'Super Admin'];
            $count = count($roles);
            $index = $faker->numberBetween(1, $count);

            return $roles[$index];
        },
        'description' => $faker->sentence
    ];
});
