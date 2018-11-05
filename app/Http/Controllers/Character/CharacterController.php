<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewCharacter;
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
     * Store a newly created character.
     *
     * @param CreateNewCharacter $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewCharacter $request)
    {
        $validated = $request->validated();

        // TODO: stricter validations and stuff, stripping out HTML, XSS stuff

        $character = Character::make([
            'user_id' => Auth::id(),
            'first_name' => $validated['first_name'],
            'chosen_name' => $validated['chosen_name'],
            'last_name' => $validated['last_name'],
            'faction_id' => $validated['faction'],
            'origin_faction_id' => $validated['origin_faction'],
            'occupation' => $validated['occupation'],
            'ic_birth_month' => $validated['ic_birth_month'],
            'ic_birth_day' => $validated['ic_birth_day'],
            'ic_birth_year' => $validated['ic_birth_year'],
            'initiation_year' => $validated['initiation_year'],
            'age' => $validated['age'],
            'history' => $validated['history'],
            'personality' => $validated['personality'],
            'appearance' => $validated['appearance'],
            'faceclaim' => $validated['faceclaim']
        ]);

        $character->save();


        return redirect()->route('view-pending-characters', Auth::user());
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
