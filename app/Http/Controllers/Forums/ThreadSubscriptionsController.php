<?php

namespace App\Http\Controllers\Forums;

use App\Models\Forum\Thread;
use App\Models\Subscriptions\ThreadSubscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThreadSubscriptionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $sub_thread_ids = ThreadSubscription::where('user_id',$user->id)->pluck('thread_id');

        $subscriptions = Thread::with(['lastPost.author','firstPost.author'])
            ->whereIn('id', $sub_thread_ids)
            ->orderBy('updated_at','desc')
            ->get();

        return view('user.manage.subscriptions', [
            'user' => $user,
            'subscriptions' => $subscriptions
        ]);
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

