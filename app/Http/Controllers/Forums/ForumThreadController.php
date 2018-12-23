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
     * @param Forum $forum
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Forum $forum)
    {

        $this->authorize('view', $forum);

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
     * @param Forum $forum
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create(Forum $forum)
    {
        // TODO: update later with specific rules
        $this->authorize('view', $forum);

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
        // TODO: update later with specific rules
        $this->authorize('view', $forum);

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

        return redirect()->route('view-thread', [$forum, $thread]);
    }


    /**
     * Show the form for editing the specified forum thread.
     * Editing Title, description, tags, move
     *
     * @param Forum $forum
     * @param Thread $thread
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Forum $forum, Thread $thread)
    {
        $this->authorize('update', $thread);

        return view('forum.thread.edit', [
            'forum' => $forum,
            'thread' => $thread
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Forum $forum
     * @param Thread $thread
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, Forum $forum, Thread $thread)
    {
        $this->authorize('update', $thread);

        if ($request->filled('title')) {
            $this->validate($request, [
                'title' => 'min:6|max:255',
                'description' => 'nullable|min:6',
            ]);

            $thread->fill([
                'title' => $request->title
            ]);

            if ($request->has('description')) {
                $thread->fill([
                    'description' => $request->description
                ]);
            }

            $thread->save();
        }


        if ($request->has('pin'))
        {
            $this->updatePin($thread, $request->pin);
        }

        if ($request->has('lock'))
        {
            $this->updateLock($thread, $request->lock);
        }

        return redirect()->route('view-forum', $forum);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Forum $forum
     * @param  \App\Models\Forum\Thread $thread
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function delete(Forum $forum, Thread $thread)
    {

        $this->authorize('delete', $thread);

        $thread->delete();

        return response("Deleted thread", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum\Thread $thread
     * @return void
     */
    public function destroy(Thread $thread)
    {
        //
    }

    /**
     * @param Forum $forum
     * @return mixed
     */
    public function getThreads(Forum $forum)
    {
        // TODO: get threads that user is authorized to see
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

    /**
     * @param Thread $thread
     * @return mixed
     */
    public function getThreadPosts(Thread $thread)
    {
        // TODO: get thread posts that user is authorized to see
        $posts = Post::oldest()
            ->with('author:id,username');


        if ( $thread->exists ) {
            $posts->where('thread_id', $thread->id);
        }

        return $posts->paginate(5);
    }

    public function updatePin(Thread $thread, $pin)
    {
        $this->authorize('pin', $thread);

        $thread->pin($pin);
    }

    public function updateLock(Thread $thread, $lock)
    {
        $this->authorize('lock', $thread);

        $thread->lock($lock);
    }
}
