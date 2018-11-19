<?php

namespace App\Policies;

use App\User;
use App\Models\Forum\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        if (
            $user->isSuperAdmin() ||
            $user->isAdmin() ||
            $user->isGlobalMod()
        ) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the modelsForumPost.
     *
     * @param  \App\User $user
     * @param Post $post
     * @return mixed
     */
    public function view(User $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can create modelsForumPosts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the modelsForumPost.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Forum\Post  $post
     * @return mixed
     */
    public function update(User $user, Post $post)
    {
        $author = $post->author;
        $owner = $post->author_type === 'user' ? $author : $author->user;

        return $owner->id === $user->id;
    }

    /**
     * Determine whether the user can delete the modelsForumPost.
     *
     * @param  \App\User $user
     * @param Post $post
     * @return mixed
     */
    public function delete(User $user, Post $post)
    {
        $author = $post->author;
        $owner = $post->author_type === 'user' ? $author : $author->user;

        return $owner->id === $user->id;
    }
}
