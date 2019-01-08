<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class GraphicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, User $user)
    {
        //$this->authorize('update', $user);

        $validated = $request->validate([
           'avatar' => ['nullable','url','regex:/https:\/\/([a-z0-9]+(?:[a-z0-9-]*[a-z0-9])?[.])*nickpic[.]host\/?(.*)/'],
            'icon' => ['nullable','url','regex:/https:\/\/([a-z0-9]+(?:[a-z0-9-]*[a-z0-9])?[.])*nickpic[.]host\/?(.*)/']
        ]);

        $user->graphics()->updateOrCreate([
            'owner_type' => 'user',
            'owner_id' => $user->id
        ],[
            'avatar_url' => $validated['avatar'],
            'icon_url' => $validated['icon']
        ]);

        return redirect()->route('edit-user', $user);
    }
}
