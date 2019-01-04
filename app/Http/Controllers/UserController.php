<?php

namespace App\Http\Controllers;

use App\Filters\UserFilters;
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
     * @param UserFilters $filters
     * @return \Illuminate\Http\Response
     */
    public function index(UserFilters $filters)
    {
        // show a list of all users
        $users = $this->getUsers($filters);

        return view('user.index', [
            'users' => $users
        ]);
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);

        return view('user.profile.edit', [
            'user' => $user
        ]);
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
        $this->authorize('update', $user);


    }

    public function getUsers(UserFilters $filters)
    {
        $users = User::filter($filters);

        return $users->get();
    }

}
