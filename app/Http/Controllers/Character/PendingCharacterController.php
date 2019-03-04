<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePendingCharacter;
use App\Models\Character\Faction;
use App\Models\Character\PendingCharacter;
use App\Notifications\CharacterWasPended;
use App\Traits\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendingCharacterController extends Controller
{
    use Time;
    // only registered users can use characters
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show a list of all pending characters
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Only admin can see this view
        $this->middleware('admin');

        $pending_characters = PendingCharacter::currentStatus('In Review')->get();

        return view('admin.pending_characters.index', [
            'pending_characters' => $pending_characters
        ]);
    }

    public function create()
    {
        // TODO: authorization (new members, points, etc)

        $factions = Faction::all();

        return view('character.create', [
            'factions' => $factions,
            'ages' => $this->getAges(),
            'years' => $this->getBirthYears(),
            'months' => $this->getMonths(),
            'clazzes' => $this->getInitiationYears(),
            'character' => new \App\Models\Character\Character
        ]);
    }

    /**
     * Store a newly created character.
     *
     * @param CreatePendingCharacter $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePendingCharacter $request)
    {
        // TODO: authorization (new members, points, etc)
        $request->flash();
        $validated = $request->validated();

        // TODO: stricter validations and stuff, stripping out HTML, XSS stuff

        $character = PendingCharacter::create([
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

        if ($request['save']) {
            $character->setStatus('Work In Progress');
        }

        else {
            $character->setStatus('In Review');
        }

        return redirect()->route('view-my-pending-characters');
    }

    /**
     * Display a pending character application
     *
     * @param PendingCharacter $pcharacter
     * @return \Illuminate\Http\Response
     */
    public function show(PendingCharacter $pcharacter)
    {
        // only admin can see the pending character application form
        $this->middleware('admin');

        return view('admin.pending_characters.show', [
            'character' => $pcharacter
        ]);
    }

    /**
     * Update a pending character's status
     *
     * @param Request $request
     * @param PendingCharacter $character
     * @return \Illuminate\Http\Response
     * @throws \Spatie\ModelStatus\Exceptions\InvalidStatus
     */
    public function update(Request $request, PendingCharacter $character)
    {
        // only admin can update the pending character application status
        $this->middleware('admin');

        $validated = $request->validate([
            'reason' => 'required'
        ]);

        $character->setStatus('Pending Modifications', $validated['reason']);

        $character->user->notify(new CharacterWasPended($character));


        return redirect()->route('admin-view-pending-characters');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param PendingCharacter $character
     * @return void
     */
    public function destroy(PendingCharacter $character)
    {
        //
    }
}
