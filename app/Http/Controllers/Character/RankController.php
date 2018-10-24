<?php

namespace App\Http\Controllers\Character;

use App\Http\Controllers\Controller;
use App\Models\Character\Rank;
use Illuminate\Http\Request;

class RankController extends Controller
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
        $ranks = Rank::all();

        return view('admin.rank.index', [
            'ranks' => $ranks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rank.create');
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

        Rank::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect('/admin/rank');

    }

    /**
     * Display the specified resource.
     *
     * @param Rank $rank
     * @return void
     */
    public function show(Rank $rank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Rank $rank
     * @return void
     */
    public function edit(Rank $rank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Rank $rank
     * @return void
     */
    public function update(Request $request, Rank $rank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Rank $rank
     * @return void
     */
    public function destroy(Rank $rank)
    {
        //
    }
}
