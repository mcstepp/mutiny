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
                Dashboard description
            </p>
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
                                <a href="{{ route('view-my-pending-characters') }}">User List</a>
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
                                <a href="{{ route('view-my-pending-characters') }}">Create a Character</a>
                            </li>
                            <li>
                                <a href="{{ route('view-my-pending-characters') }}">My Pending Characters</a>
                            </li>
                            <li>
                                <a href="{{ route('view-my-pending-characters') }}">Character List</a>
                            </li>
                            <li>
                                <a href="{{ route('view-my-pending-characters') }}">User List</a>
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
