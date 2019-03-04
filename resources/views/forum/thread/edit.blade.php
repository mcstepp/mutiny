@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => $forum->category->name
    ],[
    'link-route' => $forum->path(),
    'link-name' => $forum->name
    ],[
    'link-name' => 'Edit a Thread'
    ]
    ]])

    <div class="container-fluid my-3">
        <div class="row">
            <div class="col">
                <h1 class="m-fancy-header page-title neon-default">{{ $forum->name }}</h1>
                <div class="page-desc">{{ $forum->description }}</div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-3">

        <div class="row">
            <div class="col">
                <div class="card m-card">
                    <h2 class="card-top m-fancy-title text-uppercase">Edit Thread</h2>

                    <div class="card-body container-fluid">
                        <form method="POST"
                              action="{{ route('update-thread', [$forum, $thread]) }}"
                              class="form-horizontal">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group row">
                                <label class="col-sm-2">Forum Name:</label>
                                <div class="col-sm-10">
                                    {{ $forum->name }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-sm-2" class="control-label">
                                    Thread Title:
                                </label>
                                <div class="col-sm-10">
                                    <input type="text"
                                           class="form-control"
                                           name="title" id="title"
                                           placeholder="Thread Title"
                                           value="{{ $thread->title }}"
                                           required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-2" class="control-label">
                                    Thread Description:
                                </label>
                                <div class="col-sm-10">
                                    <input type="text"
                                           class="form-control"
                                           name="description"
                                           id="description"
                                           placeholder="Thread Description"
                                           value="{{ $thread->description }}">
                                </div>
                            </div>


                            @if($forum->ic && $forum->moderators->contains($thread->author->user))

                                <post-as :characters="{{ json_encode($thread->author->user->characters) }}"
                                         :user="{{ json_encode($thread->author->user) }}"></post-as>

                            @elseif($forum->ic && !$forum->moderators->contains($thread->author->user()))

                                <post-as :characters="{{ json_encode($thread->author->user->characters) }}">

                                </post-as>

                            @else

                                <post-as :user="{{ json_encode($thread->author->user) }}"></post-as>

                            @endif


                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Edit Thread</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
