<?php

namespace App\Http\ViewComposers;

use App\Models\Forum\Category;
use App\Models\Forum\Forum;
use Illuminate\View\View;

class NavigationComposer
{

    protected $forums;

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories = Category::with(['forums' => function ($query) {
            $query->where('private', 0);
        }])
            ->where('private', 0)->get();

        $view->with('categories', $categories);
    }
}