<?php

namespace App\Http\Controllers\Admin;

use App\Models\Character\Character;
use Illuminate\Http\Request;

class AdminCharacterController extends AdminController
{
    public function edit(Request $request, Character $character)
    {
        return view('admin.character.edit',[
            'character' => $character
        ]);
    }
}
