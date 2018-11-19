<?php

use Illuminate\Database\Seeder;

class PendingCharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Character\PendingCharacter')->create([
            'user_id' => 3,
            'faction_id' => 1,
            'origin_faction_id' => 2
        ]);

        factory('App\Models\Character\PendingCharacter')->create([
            'user_id' => 3,
            'faction_id' => 2,
            'origin_faction_id' => 3
        ]);

        factory('App\Models\Character\PendingCharacter')->create([
            'user_id' => 4,
            'faction_id' => 3,
            'origin_faction_id' => 5
        ]);

        factory('App\Models\Character\PendingCharacter')->create([
            'user_id' => 4,
            'faction_id' => 4,
            'origin_faction_id' => 1
        ]);

        factory('App\Models\Character\PendingCharacter')->create([
            'user_id' => 5,
            'faction_id' => 5,
            'origin_faction_id' => 3
        ]);

        factory('App\Models\Character\PendingCharacter')->create([
            'user_id' => 6,
            'faction_id' => 6,
            'origin_faction_id' => 4
        ]);


    }
}
