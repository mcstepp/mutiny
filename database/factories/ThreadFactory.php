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

$factory->define(App\Models\Forum\Thread::class, function (Faker $faker) {

    $forum = factory('App\Models\Forum\Forum')->create();
    $author = $forum->ic ? factory('App\Models\Character\Character')->create()
        : factory('App\Models\User')->create();

    return [
        'forum_id' => $forum->id,
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(5),
//        'locked' => 0,
//        'pinned' => 0,
//        'announcement' => 0,
    ];
});
