<?php

namespace App\Http\ViewComposers;

use App\Models\Forum\Thread;
use Illuminate\View\View;

class PostsWidgetComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $characters = auth()->user()->characters->pluck('id');

        $ic_threads = Thread::where('author_type','character')
            ->with(['posts' => function($query) use($characters) {
                return $query->whereIn('author_id', $characters);
        }])
            ->groupBy('id')
            ->get();

        $ic_post_count = 0;
        foreach ($ic_threads as $thread) {
            $ic_post_count = $ic_post_count + $thread->posts->count();
        }

        $oc_threads = Thread::where('author_type','user')
            ->with(['posts' => function($query) {
                return $query->where('author_id', auth()->id());
            }])
            ->groupBy('id')
            ->get();

        $oc_post_count = 0;
        foreach ($oc_threads as $thread) {
            $oc_post_count = $oc_post_count + $thread->posts->count();
        }

        $view->with([
            'ic_threads' => $ic_threads,
            'oc_threads' => $oc_threads,
            'oc_post_count' => $oc_post_count,
            'ic_post_count' =>$ic_post_count
        ]);
    }
}