<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create([
            'username' => 'disco before the breakdown',
            'password' => bcrypt('secret'),
            'alias' => 'disco',
            'email' => 'disco@email.com',
            'role' => '5'
        ]);

        factory('App\User')->create([
            'username' => 'THE ORIGINAL COWBOY',
            'password' => bcrypt('secret'),
            'alias' => 'cowboy',
            'email' => 'cowboy@email.com',
            'role' => '4'
        ]);

        factory('App\User')->create([
            'username' => 'the credible hulk',
            'password' => bcrypt('secret'),
            'alias' => 'bruce banner',
            'email' => 'bruceisloose@email.com',
            'role' => '3'
        ]);

        factory('App\User')->create([
            'username' => 'here\'s johnny',
            'password' => bcrypt('secret'),
            'alias' => 'johnny',
            'email' => 'johnny@email.com',
            'role' => '2'
        ]);

        factory('App\User')->create([
            'username' => 'A girl named boxcar',
            'password' => bcrypt('secret'),
            'alias' => 'Ruby',
            'email' => 'ruby@email.com',
            'role' => '1'
        ]);
    }
}
