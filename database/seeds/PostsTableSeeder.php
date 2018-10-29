<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $users = App\User::all();
        $threads = App\Models\Forum\Thread::all();

        $users->each(function ($user) use ($threads) {
            $threads->each(function ($thread) use ($user) {
                $user->posts()->save(factory('App\Models\Forum\Post')->make([
                    'author_id' => $user->id,
                    'author_type' => 'user',
                    'thread_id' => $thread->id
                ]));
            });
        });

//        factory('App\Models\Forum\Post')->create([
//            'thread_id' => 2,
//            'author_type' => 'user',
//            'author_id' => 2
//        ]);
//
//        factory('App\Models\Forum\Post')->create([
//            'thread_id' => 3,
//            'author_type' => 'user',
//            'author_id' => 3
//        ]);
//
//        factory('App\Models\Forum\Post')->create([
//            'thread_id' => 4,
//            'author_type' => 'user',
//            'author_id' => 4
//        ]);

//        factory('App\Models\Forum\Post', 10)->create([
//            'thread_id' => 1,
//            'author_type' => 'user',
//            'author_id' => function() {
//                return rand(1,5);
//            }
//        ]);
//
//        factory('App\Models\Forum\Post', 15)->create([
//            'thread_id' => 2,
//            'author_type' => 'user',
//            'author_id' => function() {
//                return rand(1,5);
//            }
//        ]);
//
//        factory('App\Models\Forum\Post', 20)->create([
//            'thread_id' => 3,
//            'author_type' => 'user',
//            'author_id' => function() {
//                return rand(1,5);
//            }
//        ]);
//
//        factory('App\Models\Forum\Post', 4)->create([
//            'thread_id' => 4,
//            'author_type' => 'user',
//            'author_id' => function() {
//                return rand(1,5);
//            }
//        ]);
    }
}
