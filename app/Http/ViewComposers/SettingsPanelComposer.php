<?php

namespace App\Http\ViewComposers;

use App\Models\Forum\Category;
use App\Models\Forum\Forum;
use Illuminate\View\View;

class SettingsPanelComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $sub_updates_count = auth()->user()->subscriptions()->count();

        $view->with('sub_updates_count', $sub_updates_count);
    }
}