@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => 'Users'
    ]
    ]])

    <div class="container-fluid my-3">

        <div class="row">
            <h1 class="m-fancy-header neon-default">User List</h1>
        </div>

        <div class="row">
            <div class="btn-group m-3">
                <button type="button" class="btn btn-outline-primary">Sort By Role</button>
                <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('user-list',['role' => 'asc']) }}">Lowest to Highest</a>
                    <a class="dropdown-item" href="{{ route('user-list',['role' => 'desc']) }}">Highest to Lowest</a>
                </div>
            </div>

            <div class="btn-group m-3">
                <button type="button" class="btn btn-outline-primary">Sort By Name</button>
                <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('user-list',['name' => 'asc']) }}">A-Z</a>
                    <a class="dropdown-item" href="{{ route('user-list',['name' => 'desc']) }}">Z-A</a>
                </div>
            </div>
        </div>
        <div class="row">
            <dl>
                @foreach($users as $user)
                    <dt>
                        <a href="{{ $user->path() }}">{{ $user->username }}</a>
                    </dt>
                    <dd>
                       {{$user->alias}} ({{ $user->role->name }})
                    </dd>
                @endforeach
            </dl>
        </div>
    </div>

@endsection