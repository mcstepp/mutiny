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

$factory->define(App\Models\Forum\Post::class, function (Faker $faker) {

//    $forum = factory('App\Models\Forum\Forum')->make([
//        'category_id' => function () {
//            return 1;
//        }
//    ]);
//    $author = $forum->ic ? factory('App\Models\Character\Character')->make()
//        : factory('App\User')->make();
//    $thread = factory('App\Models\Forum\Thread')->make([
//        'forum_id' => $forum->id
//    ]);

    return [
        'thread_id' => function() {
            return factory('App\Models\Forum\Thread')->create()->id;
        },
        'body' => $faker->paragraphs(5, true),
        'author_id' => function (Array $post) {
            $thread = App\Models\Forum\Thread::find($post['thread_id']);
            if ($thread->forum->ic) {
                return factory('App\Models\Character\Character')->create()->id;
            };

            return factory('App\User')->create()->id;
        },
        'author_type' => function(Array $post) {
            $thread = App\Models\Forum\Thread::find($post['thread_id']);
            if ($thread->forum->ic) {
                return 'character';
            };

            return 'user';
    },
//        'locked' => 0,
//        'pinned' => 0,
//        'announcement' => 0,
    ];
});
