<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Character\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class UserController extends Controller
{
    // only registered users can use users
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
        // show a list of all users
    }


    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $activities = $user->activities()->with('subject')->get();

        return view('user.profile.show', [
            'user' => $user,
            //'characters' => $user->characters
            'activities' => $activities
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return void
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $user
     * @return void
     */
    public function update(Request $request, User $user)
    {


    }


}
