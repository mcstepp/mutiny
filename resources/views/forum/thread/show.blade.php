@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">{{ $forum->category->name }}</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="{{ $forum->path() }}">{{ $forum->name}}</a>
        </li>
        <li class="breadcrumb-menu">
            <div class="btn-group">
                <a class="btn flicker" href="#">
                    <i class="fas fa-cogs"></i> Edit Forum
                </a>
            </div>
        </li>
    </ol>

    <h3>{{ $thread->title }}</h3>

    <div class="container-fluid">
        @foreach($posts as $post)
            @include('forum.thread.post.show', $post)
        @endforeach

        {{ $posts->links() }}

        {{--<div class="row">--}}
            {{--@include('forum.thread.reply', [$thread, $forum])--}}
        {{--</div>--}}

    </div>

@endsection