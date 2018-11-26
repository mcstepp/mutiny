<?php

namespace App\Providers;

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
