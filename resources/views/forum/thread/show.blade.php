@extends('layouts.main')

@section('content')

    <div class="container-fluid">

        <ol class="breadcrumb bg-mutinydark">
            <li class="breadcrumb-item">
                <a href="#">{{ $forum->category->name }}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ $forum->path() }}">{{ $forum->name}}</a>
            </li>
        </ol>

        <h3>{{ $thread->title }}</h3>

        @foreach($posts as $post)
            @include('forum.thread.post.show', $post)
        @endforeach

        {{ $posts->links() }}

        <div class="row">
            @include('forum.thread.post._reply', [$thread, $forum])
        </div>

    </div>

@endsection