<?php

namespace App\Http\Controllers\Forums;

use App\Http\Requests\StoreForumThread;
use App\Models\Forum\Forum;
use App\Models\Forum\Post;
use App\Models\Forum\Thread;
use App\Http\Controllers\Controller;
use App\Models\Graphics;
use App\Models\User\Role;
use Carbon\Carbon;

use App\Traits\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ForumThreadController extends Controller
{
    use Time;
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
            'forum' => $forum,
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
        $this->authorize('newThread', $forum);

        return view('forum.thread.create', [
            'forum' => $forum,
            'months' => $this->getMonths(),
            'period' => $this->getPeriod(),
            'current' => $this->getCurrent(),
            'asOf' => $this->getAsOf(),
            'years' => [ 150 ]
        ]);
    }

    /**
     * Store a newly created thread of a forum in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Forum $forum
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForumThread $request, Forum $forum)
    {

        // is the author a user ('u') or a character?
        $author_id = $request->input('author_id') === 'u' ?
            auth()->id() :
            $request->input('author_id');

        $ic_date = $request->filled('ic_day') ?
            Carbon::create(
                $request->input('ic_year') + $this->getRealYear(),
                $request->input('ic_month'),
                $request->input('ic_day'))
            : NULL;

        $thread = Thread::create([
            'forum_id' => $forum->id,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'author_id' => $author_id,
            'author_type' => request('author_type'),
            'ic_month' => $request->input('ic_month', NULL),
            'ic_day' => $request->input('ic_day', NULL),
            'ic_year' => $request->input('ic_year', NULL),
            'pinned' => request('pin') || false,
            'locked' => request('lock') || false,
            'happened_at' => $ic_date
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
            'thread' => $thread,
            'months' => $this->getMonths(),
            'period' => $this->getPeriod(),
            'current' => $this->getCurrent(),
            'asOf' => $this->getAsOf(),
            'years' => [ 150 ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Forum $forum
     * @param Thread $thread
     * @return Thread|\Illuminate\Http\RedirectResponse
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


            $ic_date = $request->filled(['ic_day', 'ic_month', 'ic_year']) ? Carbon::create(
                        $request->input('ic_year') + $this->getRealYear(),
                        $request->input('ic_month'),
                        $request->input('ic_day')) : NULL;
                $thread->fill([
                    'happened_at' => $ic_date
                ]);
        }

        $thread->save();


        if ($request->has('pin'))
        {
            $this->updatePin($thread, $request->pin);
        }

        if ($request->has('lock'))
        {
            $this->updateLock($thread, $request->lock);
        }

        if ($request->wantsJson()){
            return $thread;
        }

        Artisan::call('modelCache:clear');

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
     * @param bool $pinned
     * @return mixed
     */
    public function getThreads(Forum $forum)
    {
        // TODO: get threads that user is authorized to see
        $threads = Thread::with([
                'author',
                'forum:id,name,ic',
                'posts:id,thread_id',
                'lastPost'
            ]);

        //$threads = $forum->threads();


        if ( $forum->exists ) {
            $threads->where('forum_id', $forum->id)
                ->orderBy('pinned','desc')
                ->orderBy('updated_at', 'desc');
        }

        return $threads->paginate(5);
        //return $threads->get();
    }

    /**
     * @param Thread $thread
     * @return mixed
     */
    public function getThreadPosts(Thread $thread)
    {
        // TODO: get thread posts that user is authorized to see
        $posts = Post::oldest()
            ->with(['author' => function ($morphTo) {
                $morphTo->morphWith([
                    Role::class,
                    Graphics::class
                ]);
            }]);


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
