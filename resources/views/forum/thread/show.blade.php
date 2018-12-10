@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => $forum->category->name
    ],[
    'link-route' => $forum->path(),
    'link-name' => $forum->name
    ],[
    'link-name' => $thread->title
    ]
    ]])

    <div class="container-fluid my-3">

        <h3>{{ $thread->title }}</h3>

        @foreach($posts as $post)
            @include('forum.thread.post.show', [$forum, $thread, $post])
        @endforeach

        {{ $posts->links() }}

        <div class="row">
            @include('forum.thread.post._reply', [$forum, $thread])
        </div>

    </div>

@endsection