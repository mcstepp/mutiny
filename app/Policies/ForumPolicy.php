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
        return $user->isAdmin() ?: null;
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
        /**
         * 1. New members may not view forum indexes of IC forums
         */

        if ($forum->ic) {
            return $user->isFullMember();
        }

        if ($forum->private) {
            return $forum->users->contains($user);
        }

        return true;
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

        return (
            $user->isSiteStaff() ||
            $forum->moderators->contains($user)
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

    public function newThread(User $user, Forum $forum)
    {
        if ($forum->category->private) {
            return $user->forum->contains($forum);
        }

        if ($forum->private) {
            return $forum->users->contains($user);
        }
        return true;
    }
}
