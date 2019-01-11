<?php

namespace App\Policies;

use App\Models\Character\Character;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CharacterPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        return $user->isSuperAdmin() ?: null;
    }

    public function update(User $user, Character $owner)
    {
        return $owner->isSelf();
    }

}
