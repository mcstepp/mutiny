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

        \View::composer([
            'admin.forum.create',
        ], function ($view) {
            $categories = Cache::rememberForever('categories', function (){
                return Category::orderBy('name')->get();
            });

            $view->with('categories', $categories);
        });

        // \View::composer([
        //     'character.create',
        //     'admin.pending.show'
        // ], function ($view) {
        //     $species = Cache::rememberForever('species', function (){
        //         return Species::with('subspecies')->get();
        //     });

        //     $view->with('species', $species);
        // });
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
