@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => $forum->category->name
    ],[
    'link-route' => $forum->path(),
    'link-name' => $forum->name
    ],[
    'link-name' => 'Create a Thread'
    ]
    ]])

    <div class="container-fluid my-3">

        <div class="row">
            <div class="col-md-7">
                <h1 class="h2 page-title m-fancy-header neon-default">{{ $forum->name }}</h1>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="text-center title">
                            <span class="m-fancy-title">Threads: </span>
                            <strong>{{ $forum->thread_count }}</strong>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="text-center title">
                            <span class="m-fancy-title">Replies: </span>
                            <strong>{{ $forum->post_count - $forum->thread_count }}</strong>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="text-center title">
                            <span class="m-fancy-title">Participants: </span>
                            <strong>{{ $forum->participant_count }}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-desc p-md-5 m-md-2">
            <p>
                {{--This is a forum description. In an IC forum, this text would be describing the IC setting of the forum.--}}
                {{--It can be broad, like "Common areas" or narrow like "Headquarters".--}}
                {{ $forum->description }}
            </p>
        </div>

    </div>

    <div class="container-fluid my-3">
        <div class="card m-card bg-industrial-dark">
            <h2 class="card-top m-fancy-title text-uppercase text-center">Create a New Thread</h2>
            <hr class="glow-default mt-0">

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

                    @if($forum->ic)
                        <post-ic-time :old="{{ json_encode(old()) }}"
                                      :period="{{ json_encode($period) }}"
                                      :current="{{ json_encode($current) }}"
                                      :asof="{{ json_encode($asOf) }}"
                                      :years="{{ json_encode([150]) }}"
                                      :months="{{ json_encode($months) }}"></post-ic-time>
                    @endif

                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10 checkbox">
                            <label>
                                <input type="checkbox" name="pin" id="pin" value="true">
                                Pin
                            </label><br>
                            <label>
                                <input type="checkbox" name="lock" id="closed" value="true">
                                Lock
                            </label>
                        </div>
                    </div>

                    @if($forum->ic)

                        <post-as :characters="{{ json_encode(Auth::user()->characters) }}"
                                 :user="{{ json_encode(Auth::user()) }}"></post-as>

                    @else

                        <post-as :user="{{ json_encode(Auth::user()) }}"></post-as>

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
    </div>


@endsection
