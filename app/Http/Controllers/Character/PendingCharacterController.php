<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePendingCharacter;
use App\Models\Character\Faction;
use App\Models\Character\PendingCharacter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendingCharacterController extends Controller
{
    // only registered users can use characters
    public function __construct()
    {
        $this->middleware('auth');

        $this->startDay = 31;
        $this->startMonth = "May";
        $this->startYear = 150;
        $this->maxAge = 78;
        $this->minAge = 18;
    }
    /**
     * Show a list of all pending characters
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pending_characters = PendingCharacter::currentStatus('In Review')->get();

        return view('admin.pending_characters.index', [
            'pending_characters' => $pending_characters
        ]);
    }

    public function create()
    {
        $factions = Faction::all();
        $months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ];


        return view('character.create', [
            'factions' => $factions,
            'ages' => $this->getAges(),
            'years' => $this->getBirthYears(),
            'months' => $months,
            'clazzes' => $this->getInitiationYears()
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
        $validated = $request->validated();

        // TODO: stricter validations and stuff, stripping out HTML, XSS stuff

        $pending_character = PendingCharacter::make([
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

        $pending_character->save()
            ->setStatus('In Review');

        return redirect()->route('view-pending-characters', Auth::user());
    }

    /**
     * Display a pending character application
     *
     * @param PendingCharacter $character
     * @return \Illuminate\Http\Response
     */
    public function show(PendingCharacter $character)
    {
        return view('admin.pending_characters.show', [
            'character' => $character
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
        $validated = $request->validate([
            'reason' => 'required'
        ]);

        $character->setStatus('Pending Modifications', $validated['reason']);

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

    private function getBirthYears()
    {
        $years = [];

        for ($i = $this->startYear - $this->minAge; $i >= $this->startYear - $this->maxAge; $i--) {
            $years[] = $i;
        }

        return $years;
    }

    private function getAges()
    {
        $ages = [];

        for ($i = $this->minAge; $i <= $this->maxAge; $i++) {
            $ages[] = $i;
        }

        return $ages;
    }

    private function getInitiationYears()
    {
        $years = [];

        for ($i = $this->startYear; $i >= $this->startYear-$this->maxAge + $this->minAge; $i--) {
            $years[] = $i;
        }

        return $years;
    }
}
