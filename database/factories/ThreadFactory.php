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

//    $forum = factory('App\Models\Forum\Forum')->make([
//        'category_id' => function() {
//            return 1;
//        }
//    ]);
//    $author = $forum->ic ? factory('App\Models\Character\Character')->make()
//        : factory('App\User')->make();
//    $author_type = strtolower(class_basename($author));

    return [
        'forum_id' => function()  {
            $category = factory('App\Models\Forum\Category')->create();
            return factory('App\Models\Forum\Forum')->create([
                'category_id' => $category->id
            ]);
        },
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(5),
        'author_type' => function(Array $thread) {
            if (App\Models\Forum\Forum::find($thread['forum_id'])->ic) {
                return 'character';
            };

            return 'user';
        },
        'author_id' => function (Array $thread) {
            if (App\Models\Forum\Forum::find($thread['forum_id'])->ic) {
                return factory('App\Models\Character\Character')->create()->id;
            };

            return factory('App\User')->create()->id;
        }
//        'locked' => 0,
//        'pinned' => 0,
//        'announcement' => 0,
    ];
});
