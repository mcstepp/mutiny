@extends('layouts.main')

@section('content')

    <div class="container-fluid">

        <ol class="breadcrumb bg-mutinydark">
            <li class="breadcrumb-item">
                <a href="#">{{ $forum->category->name }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ $forum->path() }}">{{ $forum->name}}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ $thread->path() }}">{{ $thread->title}}</a>
            </li>
            <li class="breadcrumb-item active">
                Edit Post
            </li>
        </ol>

        <h3>{{ $thread->title }}</h3>

        @include('forum.thread.post.show', $post)

        <div class="row">
            @include('forum.thread.post._update', [$forum, $thread, $post])
        </div>

    </div>

@endsection