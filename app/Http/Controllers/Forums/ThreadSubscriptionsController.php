<?php

namespace App\Http\Controllers\Forums;

use App\Models\Forum\Thread;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThreadSubscriptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param $forumId
     * @param Thread $thread
     */
    public function store($forumId, Thread $thread)
    {
        abort_if($forumId != $thread->forum_id, 404);

        $thread->subscribe();
    }

    public function destroy($forumId, Thread $thread)
    {
        abort_if($forumId != $thread->forum_id, 404);

        $thread->unsubscribe();
    }
}

