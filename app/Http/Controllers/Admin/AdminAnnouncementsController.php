<?php

namespace App\Http\Controllers\Admin;

use App\Models\Announcement;
use App\Http\Middleware\Admin;
use App\Http\Requests\CreateAnnouncement;
use App\Models\Forum\Post;
use App\Models\Forum\Thread;
use Illuminate\Http\Request;

class AdminAnnouncementsController extends AdminController
{
    public function index()
    {
        // return view
    }

    public function create()
    {
        return view('admin.announcements.create');
    }

    public function store(CreateAnnouncement $request)
    {

        $author_id = $request->user()->id;
        $author_type = 'user';
        $forum_id = 2; // OOC Chat

        $image_path = $request->input('image_path') ?: '/images/announcement-default-min.png';
        $description = $request->input('description') ?: 'Check it out!';

        $thread = Thread::create([
            'forum_id' => $forum_id,
            'title' => $request->input('title'),
            'description' => $description,
            'author_id' => $author_id,
            'author_type' => $author_type,
            'pinned' => true,
            'locked' => false,
            'announcement' => true
        ]);

        // make post with thread id
        $post = Post::make([
            'thread_id' => $thread->id,
            'author_id' => $thread->author_id,
            'author_type' => $thread->author_type,
            'body' => $request->input('body')
        ])->toArray();

        // create announcement
       Announcement::create([
            'thread_id' => $thread->id,
            'image_path' => $image_path
        ]);

        $thread->addPost($post);

        return redirect()->route('view-thread', [
            'forum' => $thread->forum,
            'thread' => $thread
        ]);
    }
}
