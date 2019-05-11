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
        //View::composer( 'layouts._current_character', 'App\Http\ViewComposers\CurrentCharacterComposer');

        View::composer('layouts._navigation', 'App\Http\ViewComposers\NavigationComposer');

        //View::composer('userbar', 'App\Http\ViewComposers\UserbarComposer');

        View::composer('layouts._unread_notifications', 'App\Http\ViewComposers\UnreadNotificationsComposer');
        View::composer('layouts._settings', 'App\Http\ViewComposers\SettingsPanelComposer');


        View::composer('widgets._posts', 'App\Http\ViewComposers\PostsWidgetComposer');
        View::composer('widgets._online', 'App\Http\ViewComposers\OnlineWidgetComposer');
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
