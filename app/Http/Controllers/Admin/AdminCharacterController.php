<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character\Character;
use App\Models\Character\Faction;
use Illuminate\Http\Request;

class AdminCharacterController extends AdminController
{
    public function index()
    {
        $characters = Character::orderBy('slug', 'asc')
            ->get()
            ->makeHidden([
                'history',
                'personality',
                'faceclaim',
                'appearance',
                'age',
                'created_at',
                'credit',
                'current',
                'graphics',
                'ic_birth_day',
                'ic_birth_month',
                'ic_birth_year',
                'initiation_year',
                'occupation',
                'origin_faction',
                'updated_at',
                'posts_count',
                'faction_id',
                'origin_faction_id',
                'user_id'

            ])
            ->toArray();
        return view('admin.character.index',[
           'characters' => $characters
        ]);
    }

    public function edit(Request $request, Character $character)
    {
        $factions = Faction::all();
        return view('admin.character.edit',[
            'character' => $character,
            'factions' => $factions
        ]);
    }
}
