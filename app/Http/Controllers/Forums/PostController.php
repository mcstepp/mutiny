<?php

namespace App\Http\Controllers\Forum;

use App\Models\Forum\Forum;
use App\Models\Forum\Post;
use App\Models\Forum\Thread;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param Thread $thread
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Forum $forum, Thread $thread)
    {
        // validate the post
        // TODO: more validation/authorizations

        $this->validate($request, [
           'body' => 'required|min:6',
           'author_id' => 'required',
           'author_type' => 'required'
        ]);

        $author_id = request('author_id') === 'u' ? auth()->id() : request('author_id');

        $post = POST::make([
            'thread_id' => $thread->id,
            'author_id' => $author_id,
            'author_type' => trim(request('author_type')),
            'body' => trim(request('body'))
        ])->toArray();

        $thread->addPost($post);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
