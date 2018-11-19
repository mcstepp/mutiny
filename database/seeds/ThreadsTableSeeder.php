<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();

        $users->each(function ($user) {
            $user->posts()->save(factory('App\Models\Forum\Post')->make([
                'author_id' => $user->id,
                'author_type' => 'user',
                'thread_id' => function(array $post) {
                    return factory('App\Models\Forum\Thread')->create([
                        'forum_id' => 1,
                        'author_id' => $post['author_id'],
                        'author_type' => $post['author_type']
                    ])->id;
                }
            ]));
        });

        $characters = App\Models\Character\Character::all();

        $characters->each(function ($character) {
            $character->posts()->save(factory('App\Models\Forum\Post')->make([
                'author_id' => $character->id,
                'author_type' => 'character',
                'thread_id' => function(array $post) {
                    return factory('App\Models\Forum\Thread')->create([
                        'forum_id' => 4,
                        'author_id' => $post['author_id'],
                        'author_type' => $post['author_type']
                    ])->id;
                }
            ]));
        });

//        factory('App\Models\Forum\Thread')->create([
//            'forum_id' => 1,
//            'author_type' => 'user',
//            'author_id' => 1
//        ]);
//
//        factory('App\Models\Forum\Thread')->create([
//            'forum_id' => 1,
//            'author_type' => 'user',
//            'author_id' => 2
//        ]);
//
//        factory('App\Models\Forum\Thread')->create([
//            'forum_id' => 1,
//            'author_type' => 'user',
//            'author_id' => 3
//        ]);
//
//        factory('App\Models\Forum\Thread')->create([
//            'forum_id' => 1,
//            'author_type' => 'user',
//            'author_id' => 4
//        ]);
    }
}
