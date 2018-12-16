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
                <a class="btn btn-outline-primary" href="{{ route('character-list',['faction' => 'asc']) }}">Sort By Faction</a>
            </div>

            <div class="btn-group m-3">
                <a class="btn btn-outline-secondary" href="{{ route('character-list',['pending' => 'asc']) }}">Show Pending</a>
            </div>


        </div>

        <div class="row">
            <div class="container-fluid my-3">
                <dl>
                    @foreach($characters as $character)
                        <dt>
                            <a class="text-{{ strtolower($character->faction->name)}}" href="{{ $character->path() }}"><i class="fas fa-{{ $character->faction->icon }}"></i> {{ $character->username }}</a>, Class of {{ $character->initiation_year }}, age {{ $character->age }}
                        </dt>
                        <dd>
                            {{ \Carbon\Carbon::createFromDate(null, $character->ic_birth_month, $character->ic_birth_day)->format('F j') }} YR {{ $character->ic_birth_year }} <br>
                            Face claim: {{ $character->faceclaim }}

                        </dd>
                    @endforeach
                </dl>
            </div>
        </div>
    </div>

@endsection