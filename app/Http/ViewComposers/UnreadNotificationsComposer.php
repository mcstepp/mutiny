<?php

namespace App\Http\ViewComposers;

use App\Models\Forum\Category;
use App\Models\Forum\Forum;
use Illuminate\View\View;

class UnreadNotificationsComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $notifications = auth()->user()->unreadNotifications();

        $view->with('notifications', $notifications);
    }
}