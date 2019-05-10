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

        $subscriptions_count = auth()->user()->subscriptions()->count();
        $notifications_count = auth()->user()->notifications()->count();

        $view->with([
            'subscriptions_count' => $subscriptions_count,
            'notifications_count' => $notifications_count
        ]);
    }
}

