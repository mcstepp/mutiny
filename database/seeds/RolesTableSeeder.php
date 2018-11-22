<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'New Member',
                'description' => 'New Members just joined the site and have not created their first character yet. They cannot see IC forum indices, but may view a thread if they know the url to it.'
            ],
            [
                'name' => 'Member',
                'description' => 'Members have full, public access to the site. They have had at least one active character.'
            ],
            [
                'name' => 'Global Moderator',
                'description' => 'Global Moderators have full access to the forums, threads, and posts.'
            ],
            [
                'name' => 'Admin',
                'description' => 'Admins have all the privileges of Global Moderators and full access to users and characters.'
            ],
            [
                'name' => 'Super Admin',
                'description' => 'Super Admin is the root admin for the site.'
            ],
        ];

        foreach ($roles as $role) {
            factory('App\Models\User\Role')->create([
                'name' => $role['name'],
                'description' => $role['description']
            ]);
        }
    }
}
