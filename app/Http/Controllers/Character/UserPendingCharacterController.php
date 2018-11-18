<?php

namespace App\Http\Controllers\Character;

use App\Http\Requests\CreatePendingCharacter;
use App\Models\Character\PendingCharacter;
use App\Models\Character\Faction;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPendingCharacterController extends Controller
{
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
     * Display a listing of the resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user = null)
    {

        $user = $user ?: $request->user();

        $pending_characters = PendingCharacter::currentStatus('Pending Modifications')
                                ->where('user_id', $user->id)
                                ->get();

        $in_review_characters = PendingCharacter::currentStatus('In Review')
                                    ->where('user_id', $user->id)
                                    ->get();

        $wip_characters = PendingCharacter::currentStatus('Work In Progress')
            ->where('user_id', $user->id)
            ->get();

        return view('pending_characters.index', [
            'pending_characters' => $pending_characters,
            'in_review_characters' => $in_review_characters,
            'wip_characters' => $wip_characters,
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param PendingCharacter $character
     * @return \Illuminate\Http\Response
     */
    public function show(PendingCharacter $character)
    {
        return view('pending_characters.show', [
            'character' => $character
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param PendingCharacter $character
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request, PendingCharacter $character)
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

        return view('pending_characters.edit', [
            'pending_character' => $character,
            'factions' => $factions,
            'ages' => $this->getAges(),
            'years' => $this->getBirthYears(),
            'months' => $months,
            'clazzes' => $this->getInitiationYears()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreatePendingCharacter $request
     * @param PendingCharacter $character
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Spatie\ModelStatus\Exceptions\InvalidStatus
     */
    public function update(CreatePendingCharacter $request, PendingCharacter $character)
    {
        $validated = $request->validated();

        //TODO: XSS and spam protection

        $character->update([
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
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
