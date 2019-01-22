<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character\Character;
use App\Models\Character\Faction;
use Illuminate\Http\Request;

class AdminCharacterController extends AdminController
{
    public function edit(Request $request, Character $character)
    {
        $factions = Faction::all();
        return view('admin.character.edit',[
            'character' => $character,
            'factions' => $factions
        ]);
    }
}
