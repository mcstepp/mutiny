@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => 'Characters',
    'link-route' => route('character-list')
    ],[
    'link-name' => $character->username,
    'link-route' => route('character-profile', compact('character'))
    ]
    ]])


        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    @include("forum.thread.post._character", ['author' => $character])
                </div>
            </div>

            <div class="row">
                <div class="col-md-9 d-flex">

                    <div class="card m-card bg-industrial align-content-stretch">
                        <div class="card-body">
                            <h3 class="m-fancy-header neon-default text-center card-title">Profile</h3>
                            <hr class="glow-default">
                            <ul class="nav nav-tabs m-fancy-title text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active show"
                                       data-toggle="tab"
                                       href="#backstory"
                                       role="tab">Back Story</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       data-toggle="tab"
                                       href="#personality"
                                       role="tab">Personality</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       data-toggle="tab"
                                       href="#appearance"
                                       role="tab">Appearance</a>
                                </li>
                            </ul>
                            <div class="tab-content m-profile">
                                <div class="tab-pane active show" id="backstory" role="tabpanel">
                                    {!! nl2br($character->history) !!}
                                </div>
                                <div class="tab-pane" id="personality" role="tabpanel">
                                    {!! nl2br($character->personality) !!}
                                </div>
                                <div class="tab-pane" id="appearance" role="tabpanel">
                                    {!! nl2br($character->appearance) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card m-card">
                        <div class="card-body">
                            @include('graphics._avatar', [
                                        'author' => $character,
                                        'type' => strtolower(class_basename($character)),
                                        'hide' => true])
                        </div>

                    </div>

                            <div class="card m-card">
                                <div class="card-body">
                                    <h3 class="m-fancy-header neon-default text-center card-title">Character Metadata</h3>
                                    <hr class="glow-default">
                                    <p><span class="m-fancy-title text-uppercase">Created On:</span>
                                        {{ $character->created_at->format('M j, Y') }}</p>
                                    {{--<p><span class="m-fancy-title text-uppercase">Posts:</span>--}}
                                    {{--{{ $character->posts_count }}</p>--}}
                                    <p><span class="m-fancy-title text-uppercase">Played By:</span>
                                        <a class="flicker" href="{{route('user-profile', $character->user)}}">{{ $character->user->username }}</a></p>
                                    <p><span class="m-fancy-title text-uppercase">Portrayed by:</span>
                                        {{ $character->faceclaim }}</p>
                                </div>
                            </div>

                        </div>

            </div>

            <div class="row">

                <div class="col-md-3">

                            <div class="card m-card">
                                <div class="card-body">
                                    <h3 class="m-fancy-header neon-default text-center card-title">Notable Relations</h3>
                                    <hr class="glow-default">
                                    Coming soon
                                </div>
                            </div>

                        </div>

                <div class="col-md-9">

                    <div class="card m-card bg-industrial">
                        <div class="card-body">
                            <h3 class="m-fancy-header neon-default text-center card-title">Activity</h3>
                            <hr class="glow-default">
                            @include('user.profile._activities', $activities)
                        </div>
                    </div>

                </div>

            </div>

        </div>


@endsection