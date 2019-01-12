<?php

namespace App\Http\Controllers\Character;

use App\Filters\CharacterFilters;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\CreateNewCharacter;
use App\Models\Character\Character;
use App\Models\Character\Faction;
use App\Models\Character\PendingCharacter;
use App\Models\Character\Rank;
use Illuminate\Http\Request;


class CharacterController extends Controller
{
    // only registered users can use characters
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the characters.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, CharacterFilters $filters)
    {
        // show a list of all characters
        if ($request->has('pending')) {
            $characters = $this->getPendingCharacters();
        }

        else {
            $characters = $this->getCharacters($filters);
        }

        return view('character.index', [
            'characters' => $characters
        ]);
    }

    /**
     * Show the form for creating a new (pending) character
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
        // Only admin can approve characters
        $this->middleware('admin');

        $validated = $request->validated();

        // TODO: stricter validations and stuff, stripping out HTML, XSS stuff

        $user = User::find($validated['user_id']);

        $character = Character::make([
            'user_id' => $validated['user_id'],
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

        if (!$user->current_character()) {
            $character->current = true;
        }

        // If the member is a new member
        // promote the new member to member

        if ($user->role_id == 1) {
            $user->role_id = 2;
            $user->save();
        }

        $character->save();

        return redirect()->route('admin-view-pending-characters');
    }

    /**
     * Display the specified character's profile.
     *
     * @param Character $character
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Character $character)
    {
        $activities = $character->activities()->with('subject')->get();

        return view('character.show', [
            'character' => $character,
            'activities' => $activities
        ]);
    }

    /**
     * Show the form for editing the specified character's profile.
     *
     * @param Character $character
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Character $character)
    {

        $this->authorize('update', $character);

        return view('character.edit', [
            'character' => $character,
            'type' => 'character'
        ]);
    }

    /**
     * Update the specified character in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Character $character
     * @return void
     */
    public function update(Request $request, Character $character)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Character $character
     * @return void
     */
    public function destroy(Character $character)
    {
        //
    }

    public function switch(Request $request)
    {
        // TODO: authorize, validate
        // $this->authorize('switch');

        $user = $request->user();
        $character = Character::find($request->character);

        $oldCurrent = $user->current_character();
        $oldCurrent->update(['current' => false]);
        $character->update(['current' => true]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection|static|static[]
     */
    protected function getCharacters(CharacterFilters $filters)
    {
        $characters = Character::filter($filters);

        return $characters->get();
    }

    protected function getPendingCharacters()
    {
        $characters = PendingCharacter::orderBy('faction_id')
            ->orderByDesc('ic_birth_year')
            ->orderBy('ic_birth_month')
            ->orderBy('ic_birth_day');

        return $characters->get();
    }


}
