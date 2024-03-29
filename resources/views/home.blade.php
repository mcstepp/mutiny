@extends('layouts.main')

@section('content')
    @include('layouts._breadcrumb', ['menu' => [[
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
            <div class="col-md-6 col-lg-3">
                @include("widgets._points")
            </div>

            <div class="col-md-6 col-lg-3">
                @include("widgets._posts")
            </div>

            <div class="col-md-6 col-lg-3">
                @include("widgets._online")
            </div>

            <div class="col-md-6 col-lg-3">
                @include("widgets._active_characters")
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card m-card">
                    @include("widgets._announcements")
                </div>
            </div>


            <div class="col-md-4">
                <div class="card m-card bg-industrial">
                    <div class="card-body">
                        Recent Threads
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

        {{--<div class="card-body">--}}
            {{--@if (session('status'))--}}
                {{--<div class="alert alert-success">--}}
                    {{--{{ session('status') }}--}}
                {{--</div>--}}
            {{--@endif--}}
