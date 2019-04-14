@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => 'Characters'
    ]
    ]])

    <div class="container-fluid my-3">

        <div class="row">
            <h1 class="m-fancy-header neon-default">Character List</h1>

        </div>
        <div class="row">
            <div class="btn-group m-3">
                <button type="button" class="btn btn-outline-primary">Sort By Name</button>
                <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('character-list',['name' => 'asc']) }}">A-Z</a>
                    <a class="dropdown-item" href="{{ route('character-list',['name' => 'desc']) }}">Z-A</a>
                </div>
            </div>

            <div class="btn-group m-3">
                <button type="button" class="btn btn-outline-primary">Sort By Age</button>
                <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('character-list',['age' => 'asc']) }}">Youngest to Oldest</a>
                    <a class="dropdown-item" href="{{ route('character-list',['age' => 'desc']) }}">Oldest to Youngest</a>
                </div>
            </div>

            <div class="btn-group m-3">
                <a class="btn btn-outline-secondary" href="{{ route('character-list',['pending' => 'asc']) }}">Show Pending</a>
            </div>


        </div>

        <div class="row">
            @foreach($factions as $faction)
            <div class="col-lg-4 col-md-6">
                <div class="card m-card bg-industrial-dark">
                    <div class="card-top">
                        <h4 class="m-fancy-title text-uppercase text-center text-{{ strtolower($faction->name) }}"><i class="fas fa-{{ $faction->icon }}"></i> {{ $faction->name }}</h4>
                        <hr class="glow-default">
                    </div>

                    <div class="card-body">
                        @if($pending)
                            @foreach($faction->pending_characters as $character)
                                <a href="{{ $character->path }}">{{ $character->username }}</a><br>
                            @endforeach
                        @else
                            @foreach($faction->characters as $character)
                                <a href="{{ $character->path }}">{{ $character->username }}</a><br>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection