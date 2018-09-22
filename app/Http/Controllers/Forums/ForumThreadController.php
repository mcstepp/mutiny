<?php

namespace App\Http\Controllers\Forums;

use App\Models\Forum\Forum;
use App\Models\Forum\Post;
use App\Models\Forum\Thread;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ForumThreadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show a Forum's Threads
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Forum $forum)
    {
        $threads = $this->getThreads($forum);

        if ( request()->wantsJson() ) {
            return $threads;
        }

        return view('forum.thread.index', [
            'threads' => $threads,
            'forum' => $forum
        ]);
    }

    /**
     * Show the form for creating a new thread in a given forum.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Forum $forum)
    {
        return view('forum.thread.create', compact('forum'));
    }

    /**
     * Store a newly created thread of a forum in storage.
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
            'description' => 'nullable|min:6',
            'author_id' => 'required',
            'author_type' => 'required'
        ]);

        // is the author a user ('u') or a character?
        $author_id = request('author_id') === 'u' ?
            auth()->id() :
            request('author_id');


        $thread = Thread::create([
            'forum_id' => $forum->id,
            'title' => request('title'),
            'description' => request('description'),
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
     * TODO: Move this logic to ThreadPostController@index
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
     * Show the form for editing the specified forum thread.
     * Editing Title, description, tags, move
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
     * @param  \App\Models\Forum\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function delete(Thread $thread)
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
