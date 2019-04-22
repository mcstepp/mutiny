@extends('layouts.main')

@section('content')
    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-route' => route('adminPanel'),
    'link-name' => 'Admin Panel'
    ]
    ]])
        <div class="container-fluid my-3">
            <h1 class="m-fancy-header neon-default">Admin Panel</h1>

            @if(auth()->user()->isSuperAdmin())
            <div class="card m-card bg-industrial">
                <div class="card-body">
                    <h2 class="card-title m-fancy-title text-uppercase">Game Settings</h2>

                    <div class="list-group">

                        <a href="{{ route('admin-factions') }}" class="list-group-item">
                            Factions
                        </a>

                        <a href="{{ route('admin-ranks') }}" class="list-group-item">
                            Ranks
                        </a>
                    </div>

                </div>
            </div>
            @endif

            <div class="card m-card bg-industrial">
                <div class="card-body">
                    <h2 class="card-title m-fancy-title text-uppercase">Forum Settings</h2>

                    <div class="list-group">
                        <a href="{{ route('admin-create-forum') }}" class="list-group-item">
                            Create a New Forum
                        </a>
                        <a href="{{ route('admin-edit-forum') }}" class="list-group-item">
                            Edit a Forum
                        </a>
                    </div>

                </div>
            </div>

            <div class="card m-card bg-industrial">
                <div class="card-body">
                    <h2 class="card-title m-fancy-title text-uppercase">Character Settings</h2>

                    <div class="list-group">
                        <a href="/admin/pending" class="list-group-item default">
                            New Applications
                        </a>
                        <a href="{{ route('admin-character-list') }}" class="list-group-item">
                            Edit a Character
                        </a>
                    </div>

                </div>
            </div>

        </div>
@endsection