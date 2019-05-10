<?php

namespace App\Http\Controllers\Forums;

use App\Models\Forum\Forum;
use App\Models\Forum\Post;
use App\Models\Forum\Thread;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Forum $forum
     * @return \Illuminate\Http\Response
     */
    public function index(Forum $forum)
    {
        $threads = $this->getThreads($forum);

        if ( request()->wantsJson() ) {
            return $threads;
        }

        return view('thread.index', [
            'threads' => $threads,
            'forum' => $forum
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Forum $forum)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Forum $forum
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Forum $forum)
    {
        $this->validate($request, [
            'title' => 'required|min:6|max:255',
            'body' => 'required|min:6',
            'author_id' => 'required',
            'author_type' => 'required'
        ]);

        $author_id = request('author_id') === 'u' ? auth()->id() : request('author_id');


        $thread = Thread::create([
            'forum_id' => $forum->id,
            'title' => request('title'),
            'author_id' => $author_id,
            'author_type' => request('author_type'),
            'pinned' => request('pinned') || false
        ]);

        // make post with thread id
        $post = Post::make([
            'thread_id' => $thread->id,
            'author_id' => $thread->author_id,
            'author_type' => $thread->author_type,
            'body' => request('body')
        ])->toArray();

        $thread->addPost($post);

        return redirect( route('view-thread', [$forum, $thread]));
    }

    /**
     * Display the specified resource.
     *
     * @param Forum $forum
     * @param Thread $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum, Thread $thread)
    {
        $posts = $this->getThreadPosts($thread);

        return view('thread.show', [
            'forum' => $forum,
            'thread' => $thread,
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Thread $thread
     * @return void
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Thread $thread
     * @return void
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Thread $thread
     * @return void
     */
    public function destroy(Thread $thread)
    {
        //
    }

    public function getThreads(Forum $forum)
    {
        $threads = Thread::latest('updated_at')
            ->with([
                'author:id,username',
                'forum:id,name,ic',
                'posts:id,thread_id',
                'lastPost'
            ]);

        //$threads = $forum->threads();
        

        if ( $forum->exists ) {
            $threads->where('forum_id', $forum->id);
        }

        return $threads->paginate(5);
    }

    public function getThreadPosts(Thread $thread)
    {
        $posts = Post::oldest()
            ->with('author:id,username');


        if ( $thread->exists ) {
            $posts->where('thread_id', $thread->id);
        }

        return $posts->paginate(5);
    }
}
