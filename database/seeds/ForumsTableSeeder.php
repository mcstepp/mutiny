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
        $forums = [
            [
                'category_id' => 1,
                'name' => 'Welcome',
                'description' => 'Welcome to MUTINY! Ask questions, give help, suggestions, anything site or game related.',
                'private' => false,
                'ic' => false
            ], [
                'category_id' => 1,
                'name' => 'OOC Chat',
                'description' => 'Out of Character chat. Talk about Divergent series, or anything, really. Meet the members!',
                'private' => false,
                'ic' => false
            ], [
                'category_id' => 1,
                'name' => 'Sub-Plots',
                'description' => 'Sub-Plots make up the stories, and when enough sub-plots intermingle and weave with each other, they become site plots. Find the other characters needed for your sub-plots.',
                'private' => false,
                'ic' => false
            ], [
                'category_id' => 1,
                'name' => 'Character Requests',
                'description' => 'Looking for that brother, sister, friend, enemy, mother, father, coworker, lover, whoever? Make your requests in this thread!',
                'private' => false,
                'ic' => false
            ],
                // City Central
            [
                'category_id' => 2,
                'name' => 'Council Chambers',
                'description' => 'Main headquarters and courthouse for the City Council members, the faction leaders of all five factions., ',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 2,
                'name' => 'Initiation Hall',
                'description' => 'The auditorium for Choosing Ceremonies, large enough to hold thousands of people',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 2,
                'name' => 'Factionless Underground',
                'description' => 'Beneath the city streets is the Factionless Underground, the main camp for factionless people. The only free market in the city is located here also.',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 2,
                'name' => 'Common Grounds',
                'description' => 'Public areas of the City Central',
                'private' => false,
                'ic' => true
            ],

            // Amity
            [
                'category_id' => 3,
                'name' => 'Headquarters',
                'description' => 'Amity headquarters',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 3,
                'name' => 'Residential Quarters',
                'description' => 'Amity residences',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 3,
                'name' => 'Initiate Quarters',
                'description' => 'Amity initiate areas',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 3,
                'name' => 'Common Grounds',
                'description' => 'Amity public areas',
                'private' => false,
                'ic' => true
            ],

            // Abnegation
            [
                'category_id' => 4,
                'name' => 'Headquarters',
                'description' => 'Abnegation headquarters',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 4,
                'name' => 'Residential Quarters',
                'description' => 'Abnegation residences',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 4,
                'name' => 'Orphanage',
                'description' => 'The city\'s orphanage',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 4,
                'name' => 'Common Grounds',
                'description' => 'Abnegation public areas',
                'private' => false,
                'ic' => true
            ],

            //Candor
            [
                'category_id' => 5,
                'name' => 'Headquarters',
                'description' => 'Candor headquarters',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 5,
                'name' => 'Residential Quarters',
                'description' => 'Candor residences',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 5,
                'name' => 'Initiate Quarters',
                'description' => 'Candor initiate areas',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 5,
                'name' => 'Common Grounds',
                'description' => 'Candor public areas',
                'private' => false,
                'ic' => true
            ],

            // Dauntless
            [
                'category_id' => 6,
                'name' => 'Headquarters',
                'description' => 'Dauntless headquarters',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 6,
                'name' => 'Residential Quarters',
                'description' => 'Dauntless residences',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 6,
                'name' => 'Initiate Quarters',
                'description' => 'Dauntless initiate areas',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 6,
                'name' => 'Common Grounds',
                'description' => 'Dauntless public areas',
                'private' => false,
                'ic' => true
            ],


            // Erudite
            [
                'category_id' => 7,
                'name' => 'Headquarters',
                'description' => 'Erudite headquarters',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 7,
                'name' => 'Residential Quarters',
                'description' => 'Erudite residences',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 7,
                'name' => 'Initiate Quarters',
                'description' => 'Erudite initiate areas',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 7,
                'name' => 'Common Grounds',
                'description' => 'Erudite public areas',
                'private' => false,
                'ic' => true
            ],

            // Factionless Alexandria
            [
                'category_id' => 8,
                'name' => 'Fighting Pits',
                'description' => 'Where all the action happens',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 8,
                'name' => 'Residential Quarters',
                'description' => 'Factionless Alexandria residences',
                'private' => false,
                'ic' => true
            ], [
                'category_id' => 8,
                'name' => 'Common Grounds',
                'description' => 'Factionless Alexandria public areas',
                'private' => false,
                'ic' => true
            ],

            // Staff
            [
                'category_id' => 1,
                'name' => 'Staff Room',
                'description' => 'Official staff room stuff',
                'private' => true,
                'ic' => false
            ]

        ];

        foreach ($forums as $forum) {
            factory('App\Models\Forum\Forum')->create([
                'category_id' => $forum['category_id'],
                'name' => $forum['name'],
                'description' => $forum['description'],
                'private' => $forum['private'],
                'ic' => $forum['ic']
            ]);
        }
    }
}
