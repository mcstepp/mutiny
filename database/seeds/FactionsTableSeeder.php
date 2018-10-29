<?php

use Illuminate\Database\Seeder;

class FactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Character\Faction')->create([
            'name' => 'Amity',
            'description' => 'Amity values self-sufficiency, loyalty, kindness, forgiveness, and trust. They reject anger and wrath, laziness, spitefulness, and chaos and conflict. Common Amity flaws include conflict avoidance, passiveness, and unassertive behavior.'
        ]);

        factory('App\Models\Character\Faction')->create([
            'name' => 'Abnegation',
            'description' => 'Abnegation values selflessness, sacrifice, philanthropy, and calmness. They reject selfishness, greed, and vanity. Common Abnegation flaws include deceptiveness, strictness, stifling beliefs, and prideful.',
        ]);

        factory('App\Models\Character\Faction')->create([
            'name' => 'Candor',
            'description' => 'Candor values truth and honesty, fairness and justice, order and organization, and public awareness and transparency. They reject deceptiveness and dishonesty. Common Candor flaws include inconsideration, brutal honesty, emotionless, loutish and tactless.',
        ]);

        factory('App\Models\Character\Faction')->create([
            'name' => 'Dauntless',
            'description' => 'Dauntless values bravery and courage, toughness and fearlessness as well as taking action and not standing idly by. They are known for their perseverance and physical strength and fitness. They reject cowardice, believe peace must be fought for and reject words over actions. Common Dauntless flaws include recklessness, acting without thinking, cruel violent tendencies, overconfidence and cockiness.',
        ]);

        factory('App\Models\Character\Faction')->create([
            'name' => 'Erudite',
            'description' => 'Erudite value intelligence, pursuit of knowledge, wisdom, and curiosity. They reject ignorance and illogical thinking, opinions not rooted in fact, and intolerance of differences. Common Erudite flaws include vanity, susceptibility to moral corruption, lust for power, and emotionless attitudes. ',
        ]);

        factory('App\Models\Character\Faction')->create([
            'name' => 'Factionless',
            'description' => 'Factionless people becoming factionless in one of four ways - they choose to give up their faction, they fail out of their faction\'s initiation, they are exiled from their faction, or they are born into factionless. They do not benefit from any of the goods and services produced by the society, except in the form of Abnegation charity or the factionless work program where factionless people can earn vouchers for food and medical treatment in exchange for labor. Factionless adults may never rejoin society, but factionless children may be given up for adoption at the Abnegation orphanage which guarantees them eligibility for choosing a faction as an adult.'
        ]);
    }
}
