<?php

namespace App\Http\Controllers;

use App\Models\Forum\Forum;
use App\Models\Forum\Post;
use App\Models\Forum\Thread;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Forum $forum
     * @param Thread $thread
     * @param Post $post
     */
    public function post(Forum $forum, Thread $thread, Post $post)
    {
        abort_if($thread->forum_id != $forum->id || $post->thread_id != $thread->id, 404);

        $records = $post->audits()->with('user')->get(['user_id','user_type','event', 'old_values', 'updated_at']);

        return $records;

    }
}
