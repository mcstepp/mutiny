<?php

namespace App\Http\Controllers\Character;

use App\Models\Character\PendingCharacter;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPendingCharacterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

        return view('pending_characters.index', [
            'pending_characters' => $pending_characters,
            'in_review_characters' => $in_review_characters,
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
