@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-route' => route('user-list'),
    'link-name' => 'Users'
    ],[
    'link-route' => route('user-profile', $user),
    'link-name' => $user->username
    ],[
    'link-name' => 'User Preferences'
    ]
    ]])

    <div class="container-fluid my-3">
        <div class="row">
            <div class="col">
                <h1 class="h2 page-title m-fancy-header neon-default">User Preferences</h1>

                <div class="page-desc p-md-5 m-md-2">
                    <p>
                        {{--This is a forum description. In an IC forum, this text would be describing the IC setting of the forum.--}}
                        {{--It can be broad, like "Common areas" or narrow like "Headquarters".--}}
                        User preferences description goes here
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">

                <div class="card m-card bg-industrial-dark">
                    <div class="card-top">
                        <h3 class="m-fancy-title uppercase text-center">
                            The Basics
                        </h3>
                        <hr class="glow-default">
                    </div>

                    @if($errors)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger m-3" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif

                    <div class="card-body">

                        <form method="POST" action="{{ route('update-user', $user) }}" class="form-horizontal">

                            <input type="hidden" name="_method" value="PUT">

                            {{ csrf_field() }}

                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="username" class="control-label">
                                        Username:
                                    </label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="username" id="username" value="{{ $user->username }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="alias" class="control-label">
                                        Alias:
                                    </label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="alias" id="alias" value="{{ $user->alias }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="email" class="control-label">
                                        Email:
                                    </label>
                                </div>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="new_password" class="control-label">
                                        New Password:<br /> <small>(if you want to change your current password)</small>
                                    </label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="new_password" id="new_password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="new_password_confirmation" class="control-label">
                                        Confirm New Password:<br /> <small>(if you want to change your current password)</small>
                                    </label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="new_password_confirmation" id="new_password_confirmation">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="password" class="control-label">
                                        Current Password:<br/><small class="text-danger">(required)</small>
                                    </label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="password" id="password" required>
                                </div>
                            </div>

                            <hr class="glow-default">

                            <div class="form-group row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary text-uppercase m-fancy-title">Update User</button>
                                </div>
                            </div>



                        </form>


                    </div>
                </div>

                <div class="card m-card bg-industrial-dark">
                    <div class="card-top">
                        <h3 class="m-fancy-title uppercase text-center">
                            Graphics
                        </h3>
                        <hr class="glow-default">
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('update-graphics', $user) }}" class="form-horizontal">

                            <input type="hidden" name="_method" value="PUT">

                            {{ csrf_field() }}

                                <div class="row">

                                </div>

                                <div class="form-group row d-flex">
                                    <div class="col-md-2 d-flex align-content-stretch">
                                        <label for="avatar" class="control-label align-self-center">
                                            Avatar URL:
                                        </label>
                                    </div>
                                    <div class="col-md-8 d-flex align-content-stretch">
                                        <input type="text" class="form-control align-self-center" name="avatar" id="avatar" value="{{ $user->graphics->avatar_url }}">
                                    </div>

                                    <div class="col-md-2">
                                        @if($user->graphics && $user->graphics->avatar_url)
                                            <img src="{{ $user->graphics->avatar_url }}" class="m-avatar img-thumbnail" alt="Avatar">
                                            @else
                                            <img src="https://via.placeholder.com/200x300" class="m-avatar img-thumbnail" alt="Avatar">
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row d-flex">
                                    <div class="col-md-2 d-flex align-content-stretch">
                                        <label for="icon" class="control-label align-self-center">
                                            Icon URL:

                                        </label>
                                    </div>
                                    <div class="col-md-8 d-flex align-content-stretch">
                                        <input type="text" class="form-control align-self-center" name="icon" id="icon" value="{{ $user->graphics->icon_url }}">
                                    </div>

                                    <div class="col-md-2 text-center">
                                        @if($user->graphics && $user->graphics->icon_url)
                                            <img src="{{ $user->graphics->icon_url }}" class="img-avatar img-thumbnail m-icon" alt="icon">
                                            @else
                                            <img src="https://via.placeholder.com/150" class="img-avatar img-thumbnail m-icon" alt="Icon">
                                        @endif

                                    </div>
                                </div>

                                <hr class="glow-default">

                                <div class="form-group row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-primary text-uppercase m-fancy-title">Update Graphics</button>
                                    </div>
                                </div>

                        </form>

                </div>

            </div>
        </div>

    </div>

@endsection