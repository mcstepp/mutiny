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

        <h1 class="m-fancy-header neon-default">{{ $thread->title }}</h1>

        <div class="row">
            <div class="col-md-6 left-pagination">
                {{ $posts->links() }}
            </div>

            <div class="col-md-6 text-right">
                <subscribe-button is-subscribed="{{ $thread->isSubscribedTo }}" path="{{ $thread->path() }}"></subscribe-button>
            </div>
        </div>

        @foreach($posts as $post)
            @include('forum.thread.post.show', [$forum, $thread, $post])
        @endforeach

        {{ $posts->links() }}

        <div class="row">
            @include('forum.thread.post._reply', [$forum, $thread])
        </div>

    </div>

@endsection