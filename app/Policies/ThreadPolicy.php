<?php

namespace App\Policies;

use App\User;
use App\Models\Forum\Thread;
use Illuminate\Auth\Access\HandlesAuthorization;

class ThreadPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        return
            $user->isSuperAdmin() ||
            $user->isAdmin() ||
            $user->isGlobalMod();
    }
    /**
     * Determine whether the user can view the thread.
     *
     * @param  \App\User $user
     * @param Thread $thread
     * @return mixed
     */
    public function view(User $user, Thread $thread)
    {
        //
    }

    /**
     * Determine whether the user can create threads.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the thread.
     *
     * @param  \App\User $user
     * @param Thread $thread
     * @return mixed
     */
    public function update(User $user, Thread $thread)
    {
        $author = $thread->author();
        $owner = $thread->author_type === 'user' ? $author : $author->user;

        return $owner->id === $user->id;
    }

    /**
     * Determine whether the user can delete the thread.
     *
     * @param  \App\User $user
     * @param Thread $thread
     * @return mixed
     */
    public function delete(User $user, Thread $thread)
    {
        $author = $thread->author;
        $owner = $thread->author_type === 'user' ? $author : $author->user;

        return $owner->id === $user->id;
    }
}
