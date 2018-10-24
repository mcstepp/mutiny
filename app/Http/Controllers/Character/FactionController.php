<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Models\Character\Faction;
use Illuminate\Http\Request;

class FactionController extends Controller
{

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
        $factions = Faction::all();

        return view('admin.faction.index', [
            'factions' => $factions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: authorize

        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:6',
        ]);

        //dd($request);

        Faction::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin-factions');

    }

    /**
     * Display the specified resource.
     *
     * @param Faction $faction
     * @return void
     */
    public function show(Faction $faction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Faction $faction
     * @return void
     */
    public function edit(Faction $faction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Faction $faction
     * @return void
     */
    public function update(Request $request, Faction $faction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Faction $faction
     * @return void
     */
    public function destroy(Faction $faction)
    {
        //
    }
}
