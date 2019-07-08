<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreBonusMode;
use App\Models\Checklists\BonusMode;
use Illuminate\Http\Request;

class AdminBonusModeController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bonusModes = BonusMode::all();

        return view('admin.checklists.bonus_modes.index', [
            'bonusModes' => $bonusModes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBonusMode $request)
    {
        BonusMode::create([
            'name' => $request->input('bonus_mode_name'),
            'description' => $request->input('bonus_mode_description')
        ]);

        return redirect()->route('admin-create-bonus-mode');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checklists\BonusMode  $bonusMode
     * @return \Illuminate\Http\Response
     */
    public function show(BonusMode $bonusMode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checklists\BonusMode  $bonusMode
     * @return \Illuminate\Http\Response
     */
    public function edit(BonusMode $bonusMode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checklists\BonusMode  $bonusMode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BonusMode $bonusMode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checklists\BonusMode  $bonusMode
     * @return \Illuminate\Http\Response
     */
    public function destroy(BonusMode $bonusMode)
    {
        //
    }
}
