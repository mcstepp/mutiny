<?php

namespace App\Http\ViewComposers;

use App\Models\Character\Character;
use Carbon\Carbon;
use Illuminate\View\View;

class ActiveCharactersWidgetComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $sevenDaysAgo = Carbon::now()->subWeek();

        $characters = Character::whereHas('posts', function($query) use($sevenDaysAgo) {
            return $query->where('created_at', '>=', $sevenDaysAgo)->groupBy('thread_id');
        })->count();

        $view->with([
            'characters' => $characters
        ]);
    }
}