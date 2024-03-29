<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\User' => 'App\Policies\UserPolicy',
        'App\Models\Forum\Category' => 'App\Policies\CategoryPolicy',
        'App\Models\Forum\Forum' => 'App\Policies\ForumPolicy',
        'App\Models\Forum\Thread' => 'App\Policies\ThreadPolicy',
        'App\Models\Forum\Post' => 'App\Policies\PostPolicy',
        'App\Models\Character\Character' => 'App\Policies\CharacterPolicy',
        'App\Models\Invitation' => 'App\Policies\InvitationPolicy',
        'App\Models\Graphics' => 'App\Policies\GraphicsPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

