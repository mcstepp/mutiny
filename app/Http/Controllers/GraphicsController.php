<?php

namespace App\Http\Controllers;

use App\Interfaces\IGraphics;
use Illuminate\Http\Request;

class GraphicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, IGraphics $owner)
    {
        //$this->authorize('update', $user);

        $validated = $request->validate([
           'avatar' => ['nullable','url','regex:/https:\/\/([a-z0-9]+(?:[a-z0-9-]*[a-z0-9])?[.])*nickpic[.]host\/?(.*)/'],
            'icon' => ['nullable','url','regex:/https:\/\/([a-z0-9]+(?:[a-z0-9-]*[a-z0-9])?[.])*nickpic[.]host\/?(.*)/']
        ]);

        $type = strtolower(class_basename($owner));

        $owner->graphics()->updateOrCreate([
            'owner_type' => $type,
            'owner_id' => $owner->id
        ],[
            'avatar_url' => $validated['avatar'],
            'icon_url' => $validated['icon']
        ]);

        //return redirect()->route(`edit-{$type}`, $owner);

        return redirect()->back();
    }
}
