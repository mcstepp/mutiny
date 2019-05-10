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
    'link-name' => 'Manage Subscriptions'
    ]
    ]])

    <div class="container-fluid my-3">
        <div class="row">
            <div class="col">
                <h1 class="m-fancy-header neon-default">Manage Subscriptions</h1>

                <p>Coming soon</p>
            </div>
        </div>
    </div>

@endsection