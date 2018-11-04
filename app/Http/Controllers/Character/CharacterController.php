<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Models\Character\Character;
use App\Models\Character\Faction;
use App\Models\Character\Rank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class CharacterController extends Controller
{
    // only registered users can use characters
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show a list of all characters
    }

    /**
     * Show the form for creating a new character
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('character.create');
    }

    /**
     * Store a newly accepted character.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:6|max:255',
            'faction' => 'required',
            'rank' => 'required',
            'user_id' => 'required',
            'personality' => 'required|min:100',
            'history' => 'required|min:100',
            'appearance' => 'required|min:100',
            'ic_birthday' => 'required',
            'initiation_year' => 'required',
            'faceclaim' => 'nullable'
        ]);

        // TODO: stricter validations and sanitizing, stripping out HTML, XSS stuff

        Character::create([
            'user_id' => request('user_id'),
            'name' => request('name'),
            'faction_id' => request('faction'),
            'rank_id' => request('rank'),
            'personality' => request('personality'),
            'history' => request('history'),
            'appearance' => request('appearance'),
            'ic_birthday' => request('ic_birthday'),
            'initiation_year' => request('initiation_year'),
            'faceclaim' => request('faceclaim')
        ]);

        $deleted = request('id');
        $user_id = request('user_id');
        $key = "characters_{$user_id}";

        //delete that users character cache
        Cache::forget($key);

        // delete from pending

        \DB::delete('delete from pending_characters where id = :id', [
            'id' => $deleted
        ]);

        return redirect('/admin/pending');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        // TODO: authorize, validate
        $data = $request->all();

        if ($data['ocharacter']) {
            $original = Character::find($data['ocharacter']);
            $original->update(['current' => 0]);
        }

        $character->update($data['data']);

        $user_id = $character->user->id;

        $current = "current_{$user_id}";
        $key = "characters_{$user_id}";

        Cache::forget($current);
        Cache::forget($key);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        //
    }


}
