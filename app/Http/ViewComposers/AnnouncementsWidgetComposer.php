<?php

namespace App\Http\ViewComposers;

use App\Models\Announcement;
use App\Models\Forum\Category;
use App\Models\Forum\Forum;
use Illuminate\View\View;

class AnnouncementsWidgetComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $announcements = Announcement::with('thread:id,forum_id,title,description,slug')
            ->latest()
            ->limit(3)
            ->get();

        $view->with('announcements', $announcements);
    }
}