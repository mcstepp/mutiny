<?php

use Illuminate\Database\Seeder;

class IndustryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [
            // Amity
            [
                'faction_id' => 1,
                'name' => 'Leadership',
                'description' => 'Faction leadership'
            ],[
                'faction_id' => 1,
                'name' => 'Leadership Training',
                'description' => 'Faction leadership training'
            ],[
                'faction_id' => 1,
                'name' => 'Initiation',
                'description' => 'Faction initiation'
            ], [
                'faction_id' => 1,
                'name' => 'Agriculture',
                'description' => 'Jobs related to agriculture, including farmers.'
            ],[
                'faction_id' => 1,
                'name' => 'Manufacturing',
                'description' => 'Jobs related to production and processing and other manufacturing type jobs, including factory workers, food processor like millers and butchers and bakers, etc.'
            ],[
                'faction_id' => 1,
                'name' => 'Civil Engineering',
                'description' => 'Jobs related to the design, construction, and maintenance of the physical and naturally built environment including plumbers, electricians, carpenters etc.'
            ],[
                'faction_id' => 1,
                'name' => 'Internal Operations',
                'description' => 'Jobs related to running the faction, including medics, teachers, commissary workers, etc.'
            ],
            // Abnegation
            [
                'faction_id' => 2,
                'name' => 'Leadership',
                'description' => 'Faction leadership'
            ],[
                'faction_id' => 2,
                'name' => 'Leadership Training',
                'description' => 'Faction leadership training'
            ],[
                'faction_id' => 2,
                'name' => 'Initiation',
                'description' => 'Faction initiation'
            ],[
                'faction_id' => 2,
                'name' => 'Social Services',
                'description' => 'Jobs related to coordinating services between factions and facilitating factionless benefits, including running the orphanage and religious services.'
            ],[
                'faction_id' => 2,
                'name' => 'Manual Labor',
                'description' => 'Jobs related to a variety of laborious task_categories and other as-needed work.'
            ], [
                'faction_id' => 2,
                'name' => 'Distribution',
                'description' => 'Jobs related to distributing goods to other faction commissaries and factionless donations.'
            ],[
                'faction_id' => 2,
                'name' => 'Internal Operations',
                'description' => 'Jobs related to running the faction, including medics, teachers, commissary workers, etc'
            ],
            // Candor
            [
                'faction_id' => 3,
                'name' => 'Leadership',
                'description' => 'Faction leadership'
            ],[
                'faction_id' => 3,
                'name' => 'Leadership Training',
                'description' => 'Faction leadership training'
            ],[
                'faction_id' => 3,
                'name' => 'Initiation',
                'description' => 'Faction initiation'
            ],[
                'faction_id' => 3,
                'name' => 'Criminal Justice',
                'description' => 'Jobs related to court/judicial system, including lawyers and prosecutors, clerks, paralegals'
            ],[
                'faction_id' => 3,
                'name' => 'News and Media',
                'description' => 'Jobs related to news journalism and various forms of media, including editors, journalists, talk show/news hosts, etc.'
            ],[
                'faction_id' => 3,
                'name' => 'Investigation',
                'description' => 'Jobs related to uncovering the truth, including private investigators, interrogators, and negotiators.'
            ],[
                'faction_id' => 3,
                'name' => 'Internal Operations',
                'description' => 'Jobs related to running the faction, including medics, teachers, commissary workers, etc'
            ],
            // Dauntless
            [
                'faction_id' => 4,
                'name' => 'Leadership',
                'description' => 'Faction leadership'
            ],[
                'faction_id' => 4,
                'name' => 'Leadership Training',
                'description' => 'Faction leadership training'
            ],[
                'faction_id' => 4,
                'name' => 'Initiation',
                'description' => 'Faction initiation'
            ],[
                'faction_id' => 4,
                'name' => 'Security',
                'description' => 'Jobs related to security/offense of the city, including the city patrol and peacekeepers.'
            ],[
                'faction_id' => 4,
                'name' => 'Defense',
                'description' => 'Jobs related to the defense of the city, including the wall patrol.'
            ],[
                'faction_id' => 4,
                'name' => 'Surveillance',
                'description' => 'Jobs related to the surveillance and intelligence gathering of the city, including cyber security engineers and surveillance technicians.'
            ],[
                'faction_id' => 4,
                'name' => 'Internal Operations',
                'description' => 'Jobs related to running the faction, including medics, teachers, commissary workers, etc'
            ],
            // Erudite
            [
                'faction_id' => 5,
                'name' => 'Leadership',
                'description' => 'Faction leadership'
            ],[
                'faction_id' => 5,
                'name' => 'Leadership Training',
                'description' => 'Faction leadership training'
            ],[
                'faction_id' => 5,
                'name' => 'Initiation',
                'description' => 'Faction initiation'
            ],[
                'faction_id' => 5,
                'name' => 'Clinical',
                'description' => 'Medical jobs that involve seeing and treating patients, including medical doctors, nurses, surgeons, pharmacists, psychologists, dentists, etc.'
            ],[
                'faction_id' => 5,
                'name' => 'Theoretical and Research',
                'description' => 'Jobs related to theoretical or quantitative and qualitative research, including chemists, physicists, pathologists, mathematicians, astrophysicists, etc.'
            ],[
                'faction_id' => 5,
                'name' => 'Technology and Engineering',
                'description' => 'Jobs related to advancing technology, including biomedical engineering, computer engineering, inventions, serum creation, etc.'
            ],[
                'faction_id' => 5,
                'name' => 'Internal Operations',
                'description' => 'Jobs related to running the faction, including medics, teachers, commissary workers, etc'
            ],
            // Factionless
            [
                'faction_id' => 6,
                'name' => 'Artisan',
                'description' => 'Jobs related to a skilled trade, especially one that involves making things by hand, including artists, sex workers, craftsman, etc.'
            ],[
                'faction_id' => 6,
                'name' => 'Fighting',
                'description' => 'Jobs relating to the fighting pit, including fight club leader, fighter, or trainer.'
            ],[
                'faction_id' => 6,
                'name' => 'Trade and Exchange',
                'description' => 'Jobs relating to the bartering on the factionless underground market, including bootleggers, shopkeepers, and brokers.'
            ],[
                'faction_id' => 6,
                'name' => 'Manual Labor',
                'description' => 'Jobs related to a variety of laborious task_categories and other as-needed work.'
            ],[
                'faction_id' => 6,
                'name' => 'Other',
                'description' => 'Other jobs not listed, including unemployed.'
            ]
        ];

        foreach ($industries as $industry) {
            factory('App\Models\Character\Industry')->create([
                'faction_id' => $industry['faction_id'],
                'name' => $industry['name'],
                'description' => $industry['description']
            ]);
        }
    }
}
