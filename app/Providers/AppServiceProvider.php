<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Models\Forum\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load relationmap
        $this->loadRelationMap();

        // View Composers for sidebar, character section, and userbar data
        View::composer( 'current_character', 'App\Http\ViewComposers\CurrentCharacterComposer');

        View::composer('navigation', 'App\Http\ViewComposers\NavigationComposer');

        View::composer('userbar', 'App\Http\ViewComposers\UserbarComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function loadRelationMap()
    {
        Relation::morphMap([
            'user' => 'App\User',
            'character' => 'App\Models\Character\Character',
        ]);
    }
}
