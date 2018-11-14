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
        factory('App\Models\Character\Character')->create([
            'user_id' => 1,
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
        ]);

        factory('App\Models\Character\Character')->create([
            'user_id' => 1,
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
        ]);
    }
}
