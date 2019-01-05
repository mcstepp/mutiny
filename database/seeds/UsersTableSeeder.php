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
            'username' => 'MUTINY!',
            'password' => bcrypt('secret'),
            'alias' => 'MUTINY!',
            'email' => 'theoriginalcowboy5@gmail.com',
            'role_id' => '5'
        ]);

        factory('App\User')->create([
            'username' => 'disco before the breakdown',
            'password' => bcrypt('secret'),
            'alias' => 'disco',
            'email' => 'agirlnamedboxcar@gmail.com',
            'role_id' => '5',
            'parent_id' => '1'
        ]);

        factory('App\User')->create([
            'username' => 'THE ORIGINAL COWBOY',
            'password' => bcrypt('secret'),
            'alias' => 'cowboy',
            'email' => 'cowboy@email.com',
            'role_id' => '4',
            'parent_id' => '1'
        ]);

        factory('App\User')->create([
            'username' => 'the credible hulk',
            'password' => bcrypt('secret'),
            'alias' => 'bruce banner',
            'email' => 'bruceisloose@email.com',
            'role_id' => '3',
            'parent_id' => '2'
        ]);

        factory('App\User')->create([
            'username' => 'here\'s johnny',
            'password' => bcrypt('secret'),
            'alias' => 'johnny',
            'email' => 'johnny@email.com',
            'role_id' => '2',
            'parent_id' => '3'
        ]);

        factory('App\User')->create([
            'username' => 'A girl named boxcar',
            'password' => bcrypt('secret'),
            'alias' => 'Ruby',
            'email' => 'ruby@email.com',
            'role_id' => '1',
            'parent_id' => '3'
        ]);
    }
}
