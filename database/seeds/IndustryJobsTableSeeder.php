<?php

use Illuminate\Database\Seeder;

class IndustryJobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            // 1. Amity Leadership
            [
                'industry_id' => 1,
                'name' => 'Faction Leader',
                'description' => 'Leader of Amity and member of the City Council',
                'occupancy' => 1
            ],[
                'industry_id' => 1,
                'name' => 'Deputy Faction Leader',
                'description' => 'Second in Command of Amity',
                'occupancy' => 1
            ],[
                'industry_id' => 1,
                'name' => 'Ambassador',
                'description' => 'Representative of Amity for faction relations',
                'occupancy' => 1
            ],
            // 2. Amity Leadership training
            [
                'industry_id' => 2,
                'name' => 'Intern I (top of class)',
                'description' => 'First-year Amity leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 2,
                'name' => 'Intern I (petitioned)',
                'description' => 'First-year Amity leadership intern, petitioned',
                'occupancy' => 2
            ],[
                'industry_id' => 2,
                'name' => 'Intern II (top of class)',
                'description' => 'Second-year Amity leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 2,
                'name' => 'Intern II (petitioned)',
                'description' => 'Second-year Amity leadership intern, petitioned',
                'occupancy' => 2
            ],
            // 3. Amity Initiation
            [
                'industry_id' => 3,
                'name' => 'Instructor (Civil Engineering)',
                'description' => 'Teaching initiates the basics of civil engineering. Initiates must build their own house.',
                'occupancy' => 1
            ],[
                'industry_id' => 3,
                'name' => 'Instructor (Agriculture)',
                'description' => 'Teaching initiates the basics of agriculture. Initiates will either raise livestock or grow crops in the greenhouse.',
                'occupancy' => 1
            ],[
                'industry_id' => 3,
                'name' => 'Instructor (Manufacturing)',
                'description' => 'Teaching the initiates the basics of manufacturing. Initiates will work in the factory.',
                'occupancy' => 1
            ],[
                'industry_id' => 3,
                'name' => 'Initiate',
                'description' => 'Potential member of Amity',
                'occupancy' => 99
            ],
            // 4. Agriculture
            [
                'industry_id' => 4,
                'name' => 'Director of Agriculture',
                'description' => 'Head of Agriculture',
                'occupancy' => 1
            ],[
                'industry_id' => 4,
                'name' => 'Farmer',
                'description' => 'Grows crops or raises livestock',
                'occupancy' => 99
            ],[
                'industry_id' => 4,
                'name' => 'Other',
                'description' => 'Other agricultural job',
                'occupancy' => 99
            ],
            // 5. Manufacturing
            [
                'industry_id' => 5,
                'name' => 'Plant General Manager',
                'description' => 'Head of Manufacturing',
                'occupancy' => 1
            ],[
                'industry_id' => 5,
                'name' => 'Factory Worker',
                'description' => 'Works in the factory, producing goods.',
                'occupancy' => 99
            ],[
                'industry_id' => 5,
                'name' => 'Machinist',
                'description' => 'Fixes equipment in the factory',
                'occupancy' => 99
            ],[
                'industry_id' => 5,
                'name' => 'Other',
                'description' => 'Other manufacturing job',
                'occupancy' => 99
            ],
            // 6. Civil Engineering
            [
                'industry_id' => 6,
                'name' => 'Chief Contractor',
                'description' => 'Head of Civil Engineering',
                'occupancy' => 1
            ],[
                'industry_id' => 6,
                'name' => 'Structural Engineer',
                'description' => 'Works primarily in some aspect of building construction, including framing and roofing.',
                'occupancy' => 99
            ],[
                'industry_id' => 6,
                'name' => 'Electrical Engineer',
                'description' => 'Works with electricity, electrical wiring, solar, or other forms of electrical generation, including structural electricity',
                'occupancy' => 99
            ],[
                'industry_id' => 6,
                'name' => 'Plumbing Engineer',
                'description' => 'Works with water and gas systems, including the faction water mains, aqueducts, and structural plumbing.',
                'occupancy' => 99
            ],[
                'industry_id' => 6,
                'name' => 'Other',
                'description' => 'Other civil engineering job',
                'occupancy' => 99
            ],
            // 7. Amity Internal Operations
            [
                'industry_id' => 7,
                'name' => 'Medic',
                'description' => 'Provides basic and advanced first-aid as well as assisting in child birth',
                'occupancy' => 99
            ],[
                'industry_id' => 7,
                'name' => 'Educator',
                'description' => 'Educates students of all ages within the city school system.',
                'occupancy' => 99
            ],[
                'industry_id' => 7,
                'name' => 'Commissary Worker',
                'description' => 'Works in the commissary doing various jobs as needed',
                'occupancy' => 99
            ],[
                'industry_id' => 7,
                'name' => 'Stylist',
                'description' => 'Keeps up with latest trends and fashions of the faction',
                'occupancy' => 2
            ],[
                'industry_id' => 7,
                'name' => 'Other',
                'description' => 'Other unlisted job',
                'occupancy' => 99
            ],
            // 8. Abnegnation Leadership
            [
                'industry_id' => 8,
                'name' => 'Faction Leader',
                'description' => 'Leader of Abnegation and member of the City Council',
                'occupancy' => 1
            ],[
                'industry_id' => 8,
                'name' => 'Deputy Faction Leader',
                'description' => 'Second in Command of Abnegation',
                'occupancy' => 1
            ],[
                'industry_id' => 8,
                'name' => 'Ambassador',
                'description' => 'Representative of Abnegation for faction relations',
                'occupancy' => 1
            ],
            // 9. Abnegation Leadership training
            [
                'industry_id' => 9,
                'name' => 'Intern I (top of class)',
                'description' => 'First-year Abnegation leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 9,
                'name' => 'Intern I (petitioned)',
                'description' => 'First-year Abnegation leadership intern, petitioned',
                'occupancy' => 2
            ],[
                'industry_id' => 9,
                'name' => 'Intern II (top of class)',
                'description' => 'Second-year Abnegation leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 9,
                'name' => 'Intern II (petitioned)',
                'description' => 'Second-year Abnegation leadership intern, petitioned',
                'occupancy' => 2
            ],
            // 10. Abnegation Initiation
            [
                'industry_id' => 10,
                'name' => 'Instructor (Intrafaction volunteering)',
                'description' => 'Responsible for initiates\'s volunteering within Abnegation.',
                'occupancy' => 1
            ],[
                'industry_id' => 10,
                'name' => 'Instructor (Interfaction volunteering)',
                'description' => 'Responsible for initiates\'s volunteering within other factions.',
                'occupancy' => 1
            ],[
                'industry_id' => 10,
                'name' => 'Instructor (Factionless volunteering)',
                'description' => 'Responsible for initiates\'s volunteering within the factionless.',
                'occupancy' => 1
            ],[
                'industry_id' => 10,
                'name' => 'Initiate',
                'description' => 'Potential member of Abnegation',
                'occupancy' => 99
            ],
            // 11. Social Services
            [
                'industry_id' => 11,
                'name' => 'Director of Social Services',
                'description' => 'Head of all social services and welfare programs.',
                'occupancy' => 1
            ], [
                'industry_id' => 11,
                'name' => 'Social Worker',
                'description' => 'Responsible facilitating services for citizens/faction members.',
                'occupancy' => 99
            ], [
                'industry_id' => 11,
                'name' => 'Case Worker',
                'description' => 'Responsible for facilitating services for the factionless.',
                'occupancy' => 99
            ],[
                'industry_id' => 11,
                'name' => 'Orphanage Director',
                'description' => 'Head of the orphanage',
                'occupancy' => 1
            ],[
                'industry_id' => 11,
                'name' => 'Orphanage Worker',
                'description' => 'Works in the orphanage',
                'occupancy' => 99
            ],
            // 12. Manual Labor
            [
                'industry_id' => 12,
                'name' => 'Chief of Labor',
                'description' => 'Responsible for coordinating manual labor needs within the city',
                'occupancy' => 1
            ],[
                'industry_id' => 12,
                'name' => 'Laborer',
                'description' => 'Performs various jobs based on city needs',
                'occupancy' => 99
            ],
            // 13. Distribution
            [
                'industry_id' => 13,
                'name' => 'Chief of Distribution',
                'description' => 'Responsible for coordinating distribution of goods to other factions and factionless',
                'occupancy' => 1
            ],[
                'industry_id' => 13,
                'name' => 'Distributor',
                'description' => 'Packages and/or transports goods to other factions',
                'occupancy' => 99
            ],
            // 14. Abnegnation Internal Operations
            [
                'industry_id' => 14,
                'name' => 'Medic',
                'description' => 'Provides basic and advanced first-aid as well as assisting in child birth',
                'occupancy' => 99
            ],[
                'industry_id' => 14,
                'name' => 'Educator',
                'description' => 'Educates students of all ages within the city school system.',
                'occupancy' => 99
            ],[
                'industry_id' => 14,
                'name' => 'Commissary Worker',
                'description' => 'Works in the commissary doing various jobs as needed',
                'occupancy' => 99
            ], [
                'industry_id' => 14,
                'name' => 'Chaplain',
                'description' => 'Non-denominational head of religious services',
                'occupancy' => 99
            ],
            [
                'industry_id' => 14,
                'name' => 'Other',
                'description' => 'Other unlisted job',
                'occupancy' => 99
            ],
            // 15. Candor Leadership
            [
                'industry_id' => 15,
                'name' => 'Faction Leader',
                'description' => 'Leader of Candor and member of the City Council',
                'occupancy' => 1
            ],[
                'industry_id' => 15,
                'name' => 'Deputy Faction Leader',
                'description' => 'Second in Command of Candor',
                'occupancy' => 1
            ],[
                'industry_id' => 15,
                'name' => 'Ambassador',
                'description' => 'Representative of Candor for faction relations',
                'occupancy' => 1
            ],
            // 16. Candor Leadership training
            [
                'industry_id' => 16,
                'name' => 'Intern I (top of class)',
                'description' => 'First-year Candor leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 16,
                'name' => 'Intern I (petitioned)',
                'description' => 'First-year Candor leadership intern, petitioned',
                'occupancy' => 2
            ],[
                'industry_id' => 16,
                'name' => 'Intern II (top of class)',
                'description' => 'Second-year Candor leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 16,
                'name' => 'Intern II (petitioned)',
                'description' => 'Second-year Candor leadership intern, petitioned',
                'occupancy' => 2
            ],
            // 17. Candor Initiation
            [
                'industry_id' => 17,
                'name' => 'Instructor (Faction Law and Debate)',
                'description' => 'Teaching the intricacies of faction law and debating the finer points. ',
                'occupancy' => 1
            ],[
                'industry_id' => 17,
                'name' => 'Instructor (Journalism)',
                'description' => 'Teaching how to write about events objectively',
                'occupancy' => 1
            ],[
                'industry_id' => 17,
                'name' => 'Instructor (Investigation and Interrogation)',
                'description' => 'Teaching how to find out people\'s secrets.',
                'occupancy' => 1
            ],[
                'industry_id' => 17,
                'name' => 'Initiate',
                'description' => 'Potential member of Candor',
                'occupancy' => 99
            ],
            // 18. Criminal Justice
            [
                'industry_id' => 18,
                'name' => 'District Attorney',
                'description' => 'In charge of all attorneys and paralegals',
                'occupancy' => 1
            ],[
                'industry_id' => 18,
                'name' => 'Attorney',
                'description' => 'Practices laws and represents people in criminal and civil cases',
                'occupancy' => 99
            ],
            [
                'industry_id' => 18,
                'name' => 'Paralegal',
                'description' => 'Works with attorneys on criminal and civil cases',
                'occupancy' => 99
            ],
            // 19. News and Media
            [
                'industry_id' => 19,
                'name' => 'Editor in Chief',
                'description' => 'In charge of media outlets and journalists',
                'occupancy' => 1
            ],[
                'industry_id' => 19,
                'name' => 'Journalist',
                'description' => 'Writes and/or films news or current events within the city',
                'occupancy' => 99
            ],
            // 20. Investigation
            [
                'industry_id' => 18,
                'name' => 'Detective',
                'description' => 'Primary investigator for any high crimes',
                'occupancy' => 1
            ],[
                'industry_id' => 18,
                'name' => 'Private Investigator',
                'description' => 'Investigator on a case-by-case basis',
                'occupancy' => 99
            ],
            // 21. Candor Internal Operations
            [
                'industry_id' => 21,
                'name' => 'Medic',
                'description' => 'Provides basic and advanced first-aid as well as assisting in child birth',
                'occupancy' => 99
            ],[
                'industry_id' => 21,
                'name' => 'Educator',
                'description' => 'Educates students of all ages within the city school system.',
                'occupancy' => 99
            ],[
                'industry_id' => 21,
                'name' => 'Commissary Worker',
                'description' => 'Works in the commissary doing various jobs as needed',
                'occupancy' => 99
            ],[
                'industry_id' => 21,
                'name' => 'Stylist',
                'description' => 'Keeps up with latest trends and fashions of the faction',
                'occupancy' => 2
            ],[
                'industry_id' => 21,
                'name' => 'Other',
                'description' => 'Other unlisted job',
                'occupancy' => 99
            ],
            // 22. Dauntless Leadership
            [
                'industry_id' => 22,
                'name' => 'Faction Leader',
                'description' => 'Leader of Dauntless and member of the City Council',
                'occupancy' => 1
            ],[
                'industry_id' => 22,
                'name' => 'Deputy Faction Leader',
                'description' => 'Second in Command of Dauntless',
                'occupancy' => 1
            ],[
                'industry_id' => 22,
                'name' => 'Ambassador',
                'description' => 'Representative of Dauntless for faction relations',
                'occupancy' => 1
            ],
            // 23. Dauntless Leadership training
            [
                'industry_id' => 23,
                'name' => 'Intern I (top of class)',
                'description' => 'First-year Dauntless leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 23,
                'name' => 'Intern I (petitioned)',
                'description' => 'First-year Dauntless leadership intern, petitioned',
                'occupancy' => 2
            ],[
                'industry_id' => 23,
                'name' => 'Intern II (top of class)',
                'description' => 'Second-year Dauntless leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 23,
                'name' => 'Intern II (petitioned)',
                'description' => 'Second-year Dauntless leadership intern, petitioned',
                'occupancy' => 2
            ],
            // 24. Dauntless Initiation
            [
                'industry_id' => 24,
                'name' => 'Instructor (Fitness and Combat - Transfers)',
                'description' => 'Responsible for getting transfers in peak condition with basic combat skills',
                'occupancy' => 1
            ],[
                'industry_id' => 24,
                'name' => 'Instructor (Fitness and Combat - Factionborn)',
                'description' => 'Responsible for getting factionborn in peak condition with combat skills',
                'occupancy' => 1
            ],[
                'industry_id' => 24,
                'name' => 'Instructor (Fear Landscape)',
                'description' => 'Administrates the Fear Serum to all members of Dauntless and helps them overcome specific fears identified within their fear landscapes.',
                'occupancy' => 1
            ],[
                'industry_id' => 24,
                'name' => 'Initiate',
                'description' => 'Potential member of Dauntless',
                'occupancy' => 99
            ],
            // 25. Security
            [
                'industry_id' => 25,
                'name' => 'Commander of the City Patrol',
                'description' => 'In charge of the ground forces and raids',
                'occupancy' => 1
            ],[
                'industry_id' => 25,
                'name' => 'City Patrol',
                'description' => 'Ground force soldier and/or peacekeeper ',
                'occupancy' => 99
            ],[
                'industry_id' => 25,
                'name' => 'City Patrol Dispatch',
                'description' => 'Receives calls and relays information to city patrol ground forces',
                'occupancy' => 99
            ],
            // 26. Defense
            [
                'industry_id' => 26,
                'name' => 'Commander of the Wall Patrol',
                'description' => 'In charge of the wall forces and sharpshooters',
                'occupancy' => 1
            ],[
                'industry_id' => 26,
                'name' => 'Wall Patrol',
                'description' => 'Guards the wall and works closely with surveillance ',
                'occupancy' => 99
            ], [
                'industry_id' => 26,
                'name' => 'Sharpshooter',
                'description' => 'Expert snipers who work either on the wall or on the ground',
                'occupancy' => 99
            ],
            // 27. Surveillance
            [
                'industry_id' => 27,
                'name' => 'Director of Surveillance',
                'description' => 'In charge of surveillance and intelligence',
                'occupancy' => 1
            ],[
                'industry_id' => 27,
                'name' => 'Surveillance Technician',
                'description' => 'Guards the wall and works closely with surveillance',
                'occupancy' => 99
            ], [
                'industry_id' => 27,
                'name' => 'Surveillance Engineer',
                'description' => 'Expert snipers who work either on the wall or on the ground',
                'occupancy' => 99
            ],
            // 28. Dauntless Internal Operations
            [
                'industry_id' => 28,
                'name' => 'Stylist',
                'description' => 'Keeps up with latest trends and fashions of the faction',
                'occupancy' => 99
            ],[
                'industry_id' => 28,
                'name' => 'Medic',
                'description' => 'Provides basic and advanced first-aid as well as assisting in child birth',
                'occupancy' => 99
            ],[
                'industry_id' => 28,
                'name' => 'Educator',
                'description' => 'Educates students of all ages within the city school system.',
                'occupancy' => 99
            ],[
                'industry_id' => 28,
                'name' => 'Commissary Worker',
                'description' => 'Works in the commissary doing various jobs as needed',
                'occupancy' => 99
            ],[
                'industry_id' => 28,
                'name' => 'Armorer',
                'description' => 'Provides basic and advanced first-aid as well as assisting in child birth',
                'occupancy' => 99
            ],[
                'industry_id' => 28,
                'name' => 'Mechanic',
                'description' => 'Educates students of all ages within the city school system.',
                'occupancy' => 99
            ],[
                'industry_id' => 28,
                'name' => 'Tattoo Artist',
                'description' => 'Ink masters of the City',
                'occupancy' => 2
            ],[
                'industry_id' => 28,
                'name' => 'Tattoo Apprentice',
                'description' => 'Ink master of the City in training',
                'occupancy' => 2
            ],[
                'industry_id' => 28,
                'name' => 'Other',
                'description' => 'Other unlisted job',
                'occupancy' => 99
            ],
            // 29. Erudite Leadership
            [
                'industry_id' => 29,
                'name' => 'Faction Leader',
                'description' => 'Leader of Erudite and member of the City Council',
                'occupancy' => 1
            ],[
                'industry_id' => 29,
                'name' => 'Deputy Faction Leader',
                'description' => 'Second in Command of Erudite',
                'occupancy' => 1
            ],[
                'industry_id' => 29,
                'name' => 'Ambassador',
                'description' => 'Representative of Erudite for faction relations',
                'occupancy' => 1
            ],
            // 30. Erudite Leadership training
            [
                'industry_id' => 30,
                'name' => 'Intern I (top of class)',
                'description' => 'First-year Erudite leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 30,
                'name' => 'Intern I (petitioned)',
                'description' => 'First-year Erudite leadership intern, petitioned',
                'occupancy' => 2
            ],[
                'industry_id' => 30,
                'name' => 'Intern II (top of class)',
                'description' => 'Second-year Erudite leadership intern, top of initiation class',
                'occupancy' => 2
            ],[
                'industry_id' => 30,
                'name' => 'Intern II (petitioned)',
                'description' => 'Second-year Erudite leadership intern, petitioned',
                'occupancy' => 2
            ],
            // 31. Erudite Initiation
            [
                'industry_id' => 31,
                'name' => 'Instructor (Advanced Psychology and Sociology)',
                'description' => 'Head professor over associate professors and TAs in various psychological and sociological fields, responsible for curriculum',
                'occupancy' => 1
            ],[
                'industry_id' => 31,
                'name' => 'Instructor (Advanced Mathematics and Sciences)',
                'description' => 'Head professor over associate professors in various mathematics and scientific fields, responsible for curriculum',
                'occupancy' => 1
            ],[
                'industry_id' => 31,
                'name' => 'Instructor (Independent Study)',
                'description' => 'Head counselor over coordinating initiates independent field of study, assisting initiates for post-initiation careers.',
                'occupancy' => 1
            ],[
                'industry_id' => 31,
                'name' => 'Initiate',
                'description' => 'Potential member of Erudite',
                'occupancy' => 99
            ],
            // 32. Clinical
            [
                'industry_id' => 32,
                'name' => 'Chief of Medicine',
                'description' => 'Head of clinical fields',
                'occupancy' => 1
            ],[
                'industry_id' => 32,
                'name' => 'Doctor',
                'description' => 'Practices any form of medicine, including surgery.',
                'occupancy' => 99
            ],[
                'industry_id' => 32,
                'name' => 'Psychologist',
                'description' => 'Responsible for helping people learn to cope more effectively with life issues and mental health problems',
                'occupancy' => 99
            ],
            // 33. Theoretical and Research
            [
                'industry_id' => 33,
                'name' => 'Chief of Research',
                'description' => 'Head of research and theoretical sciences',
                'occupancy' => 1
            ], [
                'industry_id' => 33,
                'name' => 'Sociologist',
                'description' => 'Responsible for researching the way society is organized around power structures, groups and individuals',
                'occupancy' => 99
            ], [
                'industry_id' => 33,
                'name' => 'Scientist',
                'description' => 'Responsible for conducting scientific research to advance knowledge in any area of interest.',
                'occupancy' => 99
            ],[
                'industry_id' => 33,
                'name' => 'Mathematician',
                'description' => 'Responsible for work concerned with numbers, data, quantity, structure, space, models, and change.',
                'occupancy' => 99
            ],
            // 34. Technology and Engineering
            [
                'industry_id' => 34,
                'name' => 'Chief Technology Officer',
                'description' => 'Head of Engineering and Technological development',
                'occupancy' => 1
            ], [
                'industry_id' => 34,
                'name' => 'Engineer',
                'description' => 'Responsible for inventing, designing, analyzing, building, and testing machines, systems, structures and materials in various fields of study, including serums.',
                'occupancy' => 99
            ],
            // 35. Erudite Internal Operations
            [
                'industry_id' => 35,
                'name' => 'Professor',
                'description' => 'Teaches a specific field within Erudite.',
                'occupancy' => 99
            ],[
                'industry_id' => 35,
                'name' => 'Commissary Worker',
                'description' => 'Works in the commissary doing various jobs as needed',
                'occupancy' => 99
            ],[
                'industry_id' => 35,
                'name' => 'Stylist',
                'description' => 'Keeps up with latest trends and fashions of the faction',
                'occupancy' => 2
            ],[
                'industry_id' => 35,
                'name' => 'Other',
                'description' => 'Other unlisted job',
                'occupancy' => 99
            ],
            // 36. Artisan
            [
                'industry_id' => 36,
                'name' => 'Artist',
                'description' => 'Makes a living by offering artistic services or creations',
                'occupancy' => 99
            ],[
                'industry_id' => 36,
                'name' => 'Masseuse',
                'description' => 'Provides relaxation service, including deep tissue and reflexology',
                'occupancy' => 99
            ],[
                'industry_id' => 36,
                'name' => 'Prostitute',
                'description' => 'Sex worker',
                'occupancy' => 99
            ],
            // 37. Fighting
            [
                'industry_id' => 37,
                'name' => 'Fight Club Boss',
                'description' => 'In charge of an organized group fighters and responsible for making sure they can fight.',
                'occupancy' => 5
            ], [
                'industry_id' => 37,
                'name' => 'Fighter',
                'description' => 'Belongs to a fight club or fights independently as their primary means of living',
                'occupancy' => 50
            ], [
                'industry_id' => 37,
                'name' => 'Trainer',
                'description' => 'Trains fighters in various or specific forms of martial arts',
                'occupancy' => 50
            ],
            // 38. Trade and Exchange
            [
                'industry_id' => 38,
                'name' => 'Trader',
                'description' => 'Collects goods and brokers trades and exchanges of goods and services',
                'occupancy' => 50
            ],
            // 39. Manual Labor
            [
                'industry_id' => 39,
                'name' => 'Laborer',
                'description' => 'Works with Abnegation to provide labor for the City in exchange for goods and benefits',
                'occupancy' => 99
            ],
            // 40. Other
            [
                'industry_id' => 40,
                'name' => 'Other job',
                'description' => 'Other unlisted job',
                'occupancy' => 99
            ]
        ];

        foreach ($jobs as $job) {
            factory('App\Models\Character\IndustryJob')->create([
                'industry_id' => $job['industry_id'],
                'name' => $job['name'],
                'description' => $job['description'],
                'occupancy' => $job['occupancy']
            ]);
        }

    }
}
