<?php

namespace App\Policies;

use App\User;
use App\Models\Invitation;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvitationPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        //return $user->isSuperAdmin() ?: null;
        return $user->isSuperAdmin();
    }

    /**
     * Determine whether the user can view the invitation.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Invitation  $invitation
     * @return mixed
     */
    public function view(User $user, Invitation $invitation)
    {
        return $user->isFullMember();
    }

    /**
     * Determine whether the user can create invitations.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // Soft launch - full members
        // later - everyone gets 10 invites, must purchase more

        return $user->isFullMember();
    }

    /**
     * Determine whether the user can update the invitation.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Invitation  $invitation
     * @return mixed
     */
    public function update(User $user, Invitation $invitation)
    {
        //
    }

    /**
     * Determine whether the user can delete the invitation.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Invitation  $invitation
     * @return mixed
     */
    public function delete(User $user, Invitation $invitation)
    {
        //
    }
}
