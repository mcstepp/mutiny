<?php

use Illuminate\Database\Seeder;

class ForumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // staff room
        factory('App\Models\Forum\Forum')->create([
           'category_id' => 1,
           'name' => 'Staff',
           'description' => 'Important staff room stuff',
           'private' => true,
           'ic' => false
        ]);

        // welcome forum
        factory('App\Models\Forum\Forum')->create([
            'category_id' => 1,
            'name' => 'Welcome',
            'description' => 'Welcome to MUTINY!',
            'private' => false,
            'ic' => false
        ]);

        // ooc chat
        factory('App\Models\Forum\Forum')->create([
            'category_id' => 1,
            'name' => 'OOC Chat',
            'description' => 'Out of Character chat',
            'private' => false,
            'ic' => false
        ]);

        // City Central forums
        factory('App\Models\Forum\Forum')->create([
            'category_id' => 2,
            'name' => 'Common Grounds',
            'description' => 'Public areas of the City Central',
            'private' => false,
            'ic' => true
        ]);

        factory('App\Models\Forum\Forum')->create([
            'category_id' => 2,
            'name' => 'Council Chambers',
            'description' => 'Main headquarters and courthouse for the City Council members, the faction leaders of all five factions., ',
            'private' => false,
            'ic' => true
        ]);

        factory('App\Models\Forum\Forum')->create([
            'category_id' => 2,
            'name' => 'Initiation Hall',
            'description' => 'The auditorium for Choosing Ceremonies, large enough to hold thousands of people',
            'private' => false,
            'ic' => true
        ]);

        factory('App\Models\Forum\Forum')->create([
            'category_id' => 2,
            'name' => 'Factionless Underground',
            'description' => 'Beneath the city streets is the Factionless Underground, the main camp for factionless people. The only free market in the city is located here also.',
            'private' => false,
            'ic' => true
        ]);

        // Amity forums

        // Abnegation forums

        // Candor forums

        // Dauntless forums

        // Erudite forums

        // Factionless Alexandria forums
    }
}
