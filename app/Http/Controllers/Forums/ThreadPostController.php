<?php

namespace App\Http\Controllers\Forums;

use App\Models\Forum\Forum;
use App\Models\Forum\Post;
use App\Models\Forum\Thread;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class ThreadPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Forum $forum
     * @param Thread $thread
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Forum $forum, Thread $thread)
    {
        //dd($thread->isSubscribedTo);
        abort_if($thread->forum_id !== $forum->id, 404);

        $this->authorize('view', $thread);

        $posts = $this->getThreadPosts($thread);

        return view('forum.thread.show', [
            'forum' => $forum,
            'thread' => $thread,
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Forum $forum
     * @param Thread $thread
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request, Forum $forum, Thread $thread)
    {
        // validate the post
        $this->authorize('view', $forum);

        $this->validate($request, [
            'body' => 'required|min:6',
            'author_id' => 'required',
            'author_type' => 'required'
        ]);

        $author_id = request('author_id') === 'u' ? auth()->id() : request('author_id');

        $post = Post::make([
            'thread_id' => $thread->id,
            'author_id' => $author_id,
            'author_type' => request('author_type'),
            'body' => request('body')
        ])->toArray();

        $thread->addPost($post)->touch();

        return back();
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Forum $forum
     * @param Thread $thread
     * @param Post $post
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Forum $forum, Thread $thread, Post $post)
    {
        $this->authorize('update', $post);

        return view('forum.thread.post.edit', [
            'forum' => $forum,
            'thread' => $thread,
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Forum $forum
     * @param Thread $thread
     * @param Post $post
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, Forum $forum, Thread $thread, Post $post)
    {
        // validate the post
        // TODO: more validation/authorizations
        $this->authorize('update', $post);

        $this->validate($request, [
            'body' => 'required|min:6',
            'author_id' => 'required',
            'author_type' => 'required'
        ]);

        $author_id = request('author_id') === 'u' ? auth()->id() : request('author_id');

        // Save for PostAudit
//        $newPost = POST::make([
//            'thread_id' => $thread->id,
//            'author_id' => $author_id,
//            'author_type' => request('author_type'),
//            'body' => request('body')
//        ])->toArray();

        $post->update([
            'author_id' => $author_id,
            'author_type' => $request->author_type,
            'body' => $request->body
        ]);

        return redirect()->route('view-thread', [$forum, $thread]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Forum $forum
     * @param Thread $thread
     * @param Post $post
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function delete(Request $request, Forum $forum, Thread $thread, Post $post)
    {

        abort_if($forum->id != $thread->forum_id, 404);

        $this->authorize('delete', $post);

        if ($thread->post_count == 1) {
            $thread->delete();
            return response("Deleted thread", 204);
        }
        else {
            $post->delete();
        }

        return response("Deleted post", 200);
    }

    /**
     * Permanently Remove the specified resource from storage.
     *
     * @param Post $post
     * @return void
     */
    public function destroy(Post $post)
    {
        //
    }


    private function getThreadPosts(Thread $thread)
    {
        $posts = Post::oldest()
            ->with('author:id,username');


        if ( $thread->exists ) {
            $posts->where('thread_id', $thread->id);
        }

        return $posts->paginate(5);
    }
}
