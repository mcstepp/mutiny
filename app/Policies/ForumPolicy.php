<?php

namespace App\Policies;

use App\User;
use App\Models\Forum\Forum;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForumPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        return $user->isSuperAdmin() ?: null;
    }
    /**
     * Determine whether the user can view the forum.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Forum\Forum  $forum
     * @return mixed
     */
    public function view(User $user, Forum $forum)
    {
        //
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
    public function update(User $user, Forum $forum)
    {
        // TODO: IFMs
        return $user->isSiteStaff();
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
