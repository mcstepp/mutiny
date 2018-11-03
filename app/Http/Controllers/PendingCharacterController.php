<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePendingCharacter;
use App\Models\Character\Faction;
use App\Models\Character\PendingCharacter;
use Illuminate\Http\Request;

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
       $pendings = PendingCharacter::latest()->get();

        return view('admin.pending.index', compact('pendings'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePendingCharacter $request)
    {
        $this->validate($request, [
            'username' => 'required|min:6|max:255',
            'species' => 'required',
            'subspecies' => 'required',
            'personality' => 'required|min:100',
            'history' => 'required|min:100',
            'appearance' => 'required|min:100',
        ]);

        // TODO: stricter validations and stuff, stripping out HTML, XSS stuff

        PendingCharacter::create([
            'username' => request('username'),
            'user_id' => auth()->id(),
            'species_id' => request('species'),
            'subspecies_id' => request('subspecies'),
            'personality' => request('personality'),
            'history' => request('history'),
            'appearance' => request('appearance'),
            'faceclaim' => request('faceclaim')
        ]);


        return view('character.status');
    }

    /**
     * Display a pending character application
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(PendingCharacter $character)
    {
        return view('admin.pending.show', compact('character'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
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
