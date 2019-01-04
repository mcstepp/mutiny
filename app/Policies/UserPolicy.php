<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function before(User $auth_user)
    {
        return $auth_user->isSuperAdmin() ?: null;
    }

    /**
     * Determine whether the user can view the forum.
     *
     * @param User $auth_user
     * @param  \App\User $user
     * @return mixed
     */
    public function view(User $auth_user, User $user)
    {

    }

    /**
     * Determine whether the user can create forums.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the forum.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Forum\Forum  $forum
     * @return mixed
     */
    public function update(User $auth_user, User $user)
    {

        return (
            $auth_user->isAdmin() ||
            $user->isSelf()
        );
    }

    /**
     * Determine whether the user can delete the forum.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Forum\Forum  $forum
     * @return mixed
     */
    public function delete(User $user, Forum $forum)
    {
        //
    }
}
