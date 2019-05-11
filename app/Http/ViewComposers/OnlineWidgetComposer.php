<?php

namespace App\Http\ViewComposers;

use App\User;
use Carbon\Carbon;
use Illuminate\View\View;

class OnlineWidgetComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $oneDayAgo = Carbon::now()->subDay();
        $users = User::where('seen_at','>=', $oneDayAgo)
            ->orderBy('seen_at', 'desc')
            ->get();

        $view->with([
            'users' => $users
        ]);
    }
}