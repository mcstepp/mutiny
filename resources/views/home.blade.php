@extends('layouts.main')

@section('content')
    @include('layouts._breadcrumb', ['menu' => [
        [
        'link-route' => route('dashboard'),
        'link-name' => 'Dashboard'
        ],[
        'link-name' => 'Dashboard'
        ],
        [
        'link-name' => 'Dashboard'
        ]
    ]])

    <div class="container-fluid my-3">

       <h1 class="m-fancy-header neon-default">Dashboard</h1>

        <div class="page-desc">
            <p>
                Features coming soon
            </p>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card m-card">
                    <div class="card-body p-3 clearfix">
                        <i class="fas fa-trophy bg-info p-3 font-2xl mr-3 float-left"></i>
                        <div class="h5 mt-2 mb-0">42</div>
                        <div class="text-uppercase text-info font-xs m-fancy-header">My Points</div>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="font-weight-bold font-xs btn-block flicker" href="#">Redeem Points <i class="text-muted fa fa-angle-right float-right font-lg"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card m-card">
                    <div class="card-body p-3 clearfix">
                        <i class="fas fa-comment-alt bg-warning p-3 font-2xl mr-3 float-left"></i>
                        <div class="h5 mt-2 mb-0">42</div>
                        <div class="text-uppercase text-warning font-xs m-fancy-header">My Posts</div>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="font-weight-bold font-xs btn-block flicker" href="#">View Breakdown <i class="text-muted fa fa-angle-right float-right font-lg"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card m-card">
                    <div class="card-body p-3 clearfix">
                        <i class="fas fa-user-clock bg-danger p-3 font-2xl mr-3 float-left"></i>
                        <div class="h5 mt-2 mb-0">42</div>
                        <div class="text-uppercase text-danger font-xs m-fancy-header">Online Players</div>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="font-weight-bold font-xs btn-block flicker" href="#">Last 24 hours <i class="text-muted fas fa-calendar-alt float-right font-lg"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card m-card">
                    <div class="card-body p-3 clearfix">
                        <i class="fas fa-users bg-primary p-3 font-2xl mr-3 float-left"></i>
                        <div class="h5 mt-2 mb-0">42</div>
                        <div class="text-uppercase text-primary font-xs m-fancy-header">Active Chars.</div>
                    </div>
                    <div class="card-footer px-3 py-2">
                        <a class="font-weight-bold font-xs btn-block flicker" href="#">Last 7 days <i class="text-muted fas fa-calendar-alt float-right font-lg"></i></a>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card m-card bg-industrial">
                    <div class="card-body">
                        <h2 class="m-fancy-title">Site Links</h2>
                        <hr class="neon-default">
                        <ul>
                            <li>
                                <a href="{{ route('terms') }}">Terms and Conditions</a>
                            </li>
                            <li>
                                <a href="{{ route('rules') }}">Rules</a>
                            </li>
                            <li>
                                <a href="{{ route('privacy') }}">Privacy Notice</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card m-card bg-industrial">
                    <div class="card-body">
                        <h2 class="m-fancy-title">My Links</h2>
                        <hr class="neon-default">
                        <ul>
                            <li>
                                <a href="{{ route('create-character') }}">Create a Character</a>
                            </li>
                            <li>
                                <a href="{{ route('view-my-pending-characters') }}">My Pending Characters</a>
                            </li>
                            <li>
                                <a href="{{ route('character-list') }}">Character List</a>
                            </li>
                            <li>
                                <a href="{{ route('user-list') }}">User List</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card m-card bg-industrial">
                    <div class="card-body">
                        <h2 class="m-fancy-title">Other Links</h2>
                        <hr class="neon-default">
                        <ul>
                            <li>
                                <a href="{{ route('face-claims') }}">Face Claims</a>
                            </li>
                            <li>
                                <a href="{{ route('occupation-claims') }}">Occupation Claims</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

{{--@section('content')--}}
    {{--<div class="card bg-secondary m-3">--}}
        {{--<div class="card-header">Dashboard</div>--}}

        {{--<div class="card-body">--}}
            {{--@if (session('status'))--}}
                {{--<div class="alert alert-success">--}}
                    {{--{{ session('status') }}--}}
                {{--</div>--}}
            {{--@endif--}}

            {{--You are logged in!--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}
