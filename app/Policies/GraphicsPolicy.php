<?php

namespace App\Policies;

use App\Interfaces\IGraphics;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GraphicsPolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        return $user->isSuperAdmin() ?: null;
    }

    public function update(User $user, IGraphics $owner)
    {
        return $owner->isSelf();
    }
}
