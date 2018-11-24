<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $characters = [
            [
                'user_id' => 2,
                'first_name' => 'Breana',
                'chosen_name' => 'Bree',
                'last_name' => 'Duncan',
                'faction_id' => 4,
                'origin_faction_id' => 4,
                'occupation' => 'Commander of the City Patrol',
                'ic_birth_month' => '6',
                'ic_birth_day' => '12',
                'ic_birth_year' => '124',
                'initiation_year' => '143',
                'age' => 25,
                'faceclaim' => 'Natalie Dormer',
                'credit' => 10000,
                'current' => 1
            ],[
                'user_id' => 2,
                'first_name' => 'Darren',
                'chosen_name' => null,
                'last_name' => 'Jasper',
                'faction_id' => 6,
                'origin_faction_id' => 2,
                'occupation' => 'Bootlegger',
                'ic_birth_month' => '4',
                'ic_birth_day' => '10',
                'ic_birth_year' => '118',
                'initiation_year' => '136',
                'age' => 32,
                'faceclaim' => 'Iwan Rheon',
                'credit' => 500,
                'current' => 0
            ], [
                'user_id' => 3,
                'first_name' => 'Lacey',
                'chosen_name' => null,
                'last_name' => 'Duncan',
                'faction_id' => 1,
                'origin_faction_id' => 4,
                'occupation' => 'Mid-wife',
                'ic_birth_month' => '6',
                'ic_birth_day' => '12',
                'ic_birth_year' => '124',
                'initiation_year' => '143',
                'age' => 25,
                'faceclaim' => 'Clare Bowen',
                'credit' => 500,
                'current' => 1
            ],[
                'user_id' => 3,
                'first_name' => 'Tor',
                'chosen_name' => null,
                'last_name' => 'Farouk',
                'faction_id' => 4,
                'origin_faction_id' => 4,
                'occupation' => 'Surveillance Engineer',
                'ic_birth_month' => '11',
                'ic_birth_day' => '29',
                'ic_birth_year' => '119',
                'initiation_year' => '138',
                'age' => 30,
                'faceclaim' => 'Rami Malek',
                'credit' => 500,
                'current' => 0
            ], [
                'user_id' => 4,
                'first_name' => 'Hunter',
                'chosen_name' => null,
                'last_name' => 'Azarias',
                'faction_id' => 1,
                'origin_faction_id' => 1,
                'occupation' => 'Carpenter',
                'ic_birth_month' => '9',
                'ic_birth_day' => '9',
                'ic_birth_year' => '118',
                'initiation_year' => '136',
                'age' => 27,
                'faceclaim' => 'Sam Palladio',
                'credit' => 500,
                'current' => 1
            ], [
                'user_id' => 4,
                'first_name' => 'Angel',
                'chosen_name' => null,
                'last_name' => 'Sinclair',
                'faction_id' => 2,
                'origin_faction_id' => 2,
                'occupation' => 'Faction Leader',
                'ic_birth_month' => '12',
                'ic_birth_day' => '24',
                'ic_birth_year' => '96',
                'initiation_year' => '115',
                'age' => 53,
                'faceclaim' => 'Tilda Swinton',
                'credit' => 500,
                'current' => 0
            ], [
                'user_id' => 5,
                'first_name' => 'Marcel',
                'chosen_name' => null,
                'last_name' => 'Mooney',
                'faction_id' => 3,
                'origin_faction_id' => 5,
                'occupation' => 'Initiate',
                'ic_birth_month' => '7',
                'ic_birth_day' => '3',
                'ic_birth_year' => '131',
                'initiation_year' => '150',
                'age' => 18,
                'faceclaim' => 'Dave Franco',
                'credit' => 500,
                'current' => 1
            ],
            [
                'user_id' => 5,
                'first_name' => 'Andrea',
                'chosen_name' => null,
                'last_name' => 'Stanton',
                'faction_id' => 5,
                'origin_faction_id' => 3,
                'occupation' => 'Psychologist',
                'ic_birth_month' => '3',
                'ic_birth_day' => '3',
                'ic_birth_year' => '125',
                'initiation_year' => '143',
                'age' => 25,
                'faceclaim' => 'Leighton Meester',
                'credit' => 500,
                'current' => 0
            ]
        ];

        foreach ($characters as $character) {
            factory('App\Models\Character\Character')->create([
                'user_id' => $character['user_id'],
                'first_name' => $character['first_name'],
                'chosen_name' => $character['chosen_name'],
                'last_name' => $character['last_name'],
                'faction_id' => $character['faction_id'],
                'origin_faction_id' => $character['origin_faction_id'],
                'occupation' => $character['occupation'],
                'ic_birth_month' => $character['ic_birth_month'],
                'ic_birth_day' => $character['ic_birth_day'],
                'ic_birth_year' => $character['ic_birth_year'],
                'initiation_year' => $character['initiation_year'],
                'age' => $character['age'],
                'faceclaim' => $character['faceclaim'],
                'credit' => $character['credit'],
                'current' => $character['current']
            ]);
        }

    }
}
