<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Forum\Category')->create(
            ['name' => 'Out of Character',
            'description' => 'This is the general out of character area. Here you will find the Welcome forum to answer most your questions, and a general chat area to meet your fellow players.'
        ]);

        factory('App\Models\Forum\Category')->create([
            'name' => 'City Central',
            'description' => 'City Central is the common area for all members of society as well as the factionless. Below the streets in the old Metro tunnels lie the Factionless Underground, home to the only free market left in the city. The school for minors is also located here, as well as testing centers for faction aptitude testing and auditorium that can hold nearly all of the city\'s faction members and their families.'
        ]);

        factory('App\Models\Forum\Category')->create([
            'name' => 'Amity',
            'description' => 'Amity\'s lands are the farm lands of the city along with specific biome-greenhouses to simulate climates that no longer exist. Implementing innovations in manufacturing and agriculture, Amity is known for their members\' work ethic and kindess. Within Amity\'s boundaries, you will find factories, farmlands, and greenhouses.'
        ]);


        factory('App\Models\Forum\Category')->create([
            'name' => 'Abnegation',
            'description' => 'Abnegation is as dreary as their faction members. Every house looks nearly identical to its neighbor, the large orphanage standing out as the primary structure, and a warehouse with all the goods produced by the city for distribution. A single building marks the headquarters of Abnegation where the faction leadership and interns do their day-to-day work. It is shared by social services, the case workers who handle factionless vouchers and make sure that city citizens receive their benefits as well.'
        ]);

        factory('App\Models\Forum\Category')->create([
            'name' => 'Candor',
            'description' => 'Candor lands have grown up over the years, the roads to the main campus heavily wooded. The campus  isn\'t as wild as the outskirts though. The brick is still standing, and grounds maintained as well as they could be, and it didn\'t feel cramped or crowded. There was plenty of room for the residential areas, the studios and newsrooms, the courtrooms and law offices. The faction headquarters was the main courthouse where the leadership of Candor heard local cases, though many cases were heard by the Council at City Central.'
        ]);

        factory('App\Models\Forum\Category')->create([
            'name' => 'Dauntless',
            'description' => 'Dauntless is the only faction where the entire faction lives within the headquarter itself and all aspects of Dauntless every-day life happens within the headquarters. Dauntless lands are easily the ones in most disarray with overgrown trees and war-torn buildings waiting to crumble. Somehow, ziplines have it across Dauntless territory, connecting the tall buildings to ground-level areas. Besides trains, the ziplines have become another preferred method transportation among the many thrill seekers of Dauntless. Dauntless headquarters has over 17 miles of corridors, spread out over seven floors, five sides, and five rings.'
        ]);

        factory('App\Models\Forum\Category')->create([
            'name' => 'Erudite',
            'description' => 'Erudite territory is one of the best kept lands in the city. The buildings are top-notch shape, remodeled in futuristic architecture, home to prototypes of advancements in technology that the rest of society will benefit from as well... eventually. At Erudite, you will find cozy apartments, glass-encased common areas, green spaces, laboratories, hospitals, libraries, and other research facilities and classrooms for higher education.'
        ]);

        factory('App\Models\Forum\Category')->create([
            'name' => 'Factionless Alexandria',
            'description' => 'Factionless Alexandria is an unincorporated area just a handful of miles south of Dauntless, across the river from Abnegation and City Central. Slowly being restored to an actual habitable area, Factionless Alexandria is ruled by Darren Jasper, the bootlegger who made it all possible. Home to the fighting pits and brothels and massage parlors, Factionless Alexandria is a shady place for seedy factionless.'
        ]);
    }
}
