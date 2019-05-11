<?php

namespace App\Http\Controllers;

use App\Filters\UserFilters;
use App\Http\Requests\UpdateUser;
use App\User;
use App\Models\Character\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;


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
        $characters = $user->characters;

        return view('user.profile.show', [
            'user' => $user,
            'activities' => $activities,
            'characters' => $characters
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
            'user' => $user,
            'type' => 'user'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUser $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(UpdateUser $request, User $user)
    {
        $this->authorize('update', $user);

        if ( trim($request->username) != $user->username)
        {
            $user->fill(['username' => trim($request->username)]);
        }

        if ( trim($request->alias) != $user->alias)
        {
            $user->fill(['alias' => trim($request->alias)]);
        }

        if ( trim($request->email) != $user->email)
        {
            $user->fill(['email' => trim($request->email)]);
        }

        if ( $request->filled('new_password')) {
            $user->fill(['password' => bcrypt($request->new_password)]);
        }

        $user->save();

        return redirect()->route('edit-user',$user);
    }

    public function getUsers(UserFilters $filters)
    {
        $users = User::filter($filters);

        return $users->get();
    }

}
