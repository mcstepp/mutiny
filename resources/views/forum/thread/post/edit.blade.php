@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => $forum->category->name
    ],[
    'link-route' => $forum->path(),
    'link-name' => $forum->name
    ],[
    'link-route' => $thread->path(),
    'link-name' => $thread->title
    ],[
    'link-name' => 'Edit Post'
    ]
    ]])

    <div class="container-fluid my-3">

        <h3>{{ $thread->title }}</h3>

        @include('forum.thread.post.show', $post)

        <div class="row">
            @include('forum.thread.post._update', [$forum, $thread, $post])
        </div>

    </div>

@endsection