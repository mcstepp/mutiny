@extends('layouts.main')

@section('content')

    <div class="container-fluid">

        <ol class="breadcrumb bg-mutinydark">
            <li class="breadcrumb-item">
                <a href="#">Users</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ $user->path() }}">{{ $user->username}}</a>
            </li>
        </ol>

        <div class="container-fluid">
            <div class="row">
                @include("forum.thread.post._user", ['author' => $user])
            </div>

            <div class="row">

                <div class="container-fluid p-0">
                    <div class="row">

                        <div class="col-md-3">

                            <div class="card m-card">
                                <div class="card-body text-center">
                                    <h3 class="m-fancy-header neon-default text-center card-title">User metadata</h3>
                                    <hr class="glow-default">
                                    @include('graphics._avatar', [
                                    'author' => $user,
                                    'type' => strtolower(class_basename($user))])
                                    <br/>
                                    <p>Member since {{ $user->created_at->format('M j, Y') }}</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-9">

                            <div class="card m-card">
                                <div class="card-body">
                                    <h3 class="m-fancy-header neon-default text-center card-title">Achievements</h3>
                                    <hr class="glow-default">
                                    Coming soon
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-9">

                            <div class="card m-card bg-industrial">
                                <div class="card-body">
                                    <h3 class="m-fancy-header neon-default text-center card-title">Activity</h3>
                                    <hr class="glow-default">
                                        @include('user.profile._activities', $activities)
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="card m-card">
                                <div class="card-body">
                                    <h3 class="m-fancy-header neon-default text-center card-title">Characters</h3>
                                    <hr class="glow-default">
                                    Coming soon
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>



    </div>

@endsection