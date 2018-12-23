<?php

namespace App\Http\ViewComposers;

use App\Models\Forum\Category;
use App\Models\Forum\Forum;
use Illuminate\View\View;

class PostHistoryComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $history = auth()->user()->unreadNotifications;

        $view->with('notifications', $notifications);
    }
}