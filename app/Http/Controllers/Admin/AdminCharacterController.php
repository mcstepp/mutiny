<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminUpdateCharacter;
use App\Models\Character\Character;
use App\Models\Character\Faction;
use App\Traits\Time;
use Illuminate\Http\Request;

class AdminCharacterController extends AdminController
{
    use Time;
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

        return view('admin.character.edit', [
                'factions' => $factions,
                'character' => $character,
                'ages' => $this->getAges(),
                'years' => $this->getBirthYears(),
                'months' => $this->getMonths(),
                'clazzes' => $this->getInitiationYears(),
                'current' => $this->getCurrent(),
                'period' => $this->getPeriod(),
                'asOf' => $this->getAsOf(),
        ]);
    }

    public function update(AdminUpdateCharacter $request, Character $character)
    {
        $request->flash();

        $character->update([
            'user_id' => $request->owner,
            'first_name' => trim($request->first_name),
            'chosen_name' => trim($request->chosen_name),
            'last_name' => trim($request->last_name),
            'faction_id' => $request->faction,
            'origin_faction_id' => $request->origin_faction,
            'job_id' => $request->job_id,
            'job_other' => trim($request->job_other) ?: null,
            'ic_birth_month' => $request->ic_birth_month,
            'ic_birth_day' => $request->ic_birth_day,
            'ic_birth_year' => $request->ic_birth_year,
            'initiation_year' => $request->initiation_year,
            'age' => $request->age,
            'history' => trim($request->history),
            'personality' => trim($request->personality),
            'appearance' => trim($request->appearance),
            'faceclaim' => trim($request->faceclaim)
        ]);

        return redirect()->route('admin-character-list');

    }
}
