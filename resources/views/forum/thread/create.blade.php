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

    <div class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="h2 m-fancy-header page-title neon-default">{{ $forum->name }}</h1>
                    <div class="page-desc">{{ $forum->description }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card m-card">
        <h2 class="card-top m-fancy-title text-uppercase">Create a New Thread</h2>

        <div class="card-body container-fluid">
            <form method="POST"
                  action="{{ route('create-thread', [$forum]) }}"
                  class="form-horizontal">
                {{ csrf_field() }}

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
                        <input type="text" class="form-control" name="title" id="title" placeholder="Thread Title" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-sm-2" class="control-label">
                        Thread Description:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="description" id="description" placeholder="Thread Description">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10 checkbox">
                        <label>
                            <input type="checkbox" name="pinned" id="pinned" value="true">
                            Pinned (Non-functional)
                        </label><br>
                        <label>
                            <input type="checkbox" name="closed" id="closed" value="true">
                            Closed (No Replies) (Non-functional)
                        </label>
                    </div>
                </div>

                @if($forum->ic)

                    <post-as character_list='{{ ${$key} }}'
                             user_data='{{ Auth::user() }}'
                             default={{ ${$current}->id }}></post-as>

                @else

                    <post-as user_data='{{ Auth::user() }}'></post-as>

                @endif

                {{-- <div class="form-group row">
                    <label for="body" class="control-label col-sm-2">Post Body:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" name="body" id="body" placeholder="Thread text" required></textarea>
                    </div>
                </div> --}}

                <div class="form-group row">
                    <label for="body" class="control-label col-sm-2">Post Body:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" name="body" id="body" placeholder="Thread text" required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Post Thread</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
