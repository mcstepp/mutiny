<?php

namespace App\Policies;

use App\User;
use App\Models\Forum\Category;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        return $user->isSuperAdmin();
    }

    /**
     * Determine whether the user can view the category.
     *
     * @param  \App\User $user
     * @param Category $category
     * @return mixed
     */
    public function view(User $user, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can create categories.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the category.
     *
     * @param  \App\User $user
     * @param Category $category
     * @return mixed
     */
    public function update(User $user, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can delete the category.
     *
     * @param  \App\User $user
     * @param Category $category
     * @return mixed
     */
    public function delete(User $user, Category $category)
    {
        //
    }
}
