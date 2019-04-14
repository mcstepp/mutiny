@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => 'Face Claims'
    ]
    ]])

    <div class="container-fluid my-3">

        <div class="row">
            <div class="col">
                <h1 class="m-fancy-header neon-default">Face Claims</h1>
            </div>
        </div>

        <div class="row">
                <div class="col">
                    <div class="card m-card bg-industrial-dark">
                        <div class="card-top">
                            <h2 class="m-fancy-header neon-default text-center">Accepted</h2>
                            <hr class="glow-default">
                        </div>
                        <div class="card-body container-fluid">
                            @foreach($characters as $character)
                            <div class="row">
                                <div class="col-6 text-right">
                                    <span class="m-fancy-title text-uppercase">{{ $character->faceclaim }}</span>
                                </div>
                                <div class="col-6">
                                    <a class="m-fancy-title text-uppercase text-center text-{{ strtolower($character->faction->name) }}" href="{{ $character->path }}"><i class="fas fa-{{ $character->faction->icon }}"></i> {{ $character->username }}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card m-card bg-industrial-dark">

                    <div class="card-top">
                        <h2 class="m-fancy-header neon-default text-center">Pending</h2>
                        <hr class="glow-default">
                    </div>

                    <div class="card-body container-fluid">
                        @foreach($pcharacters as $pcharacter)
                            <div class="row">
                                <div class="col-6 text-right">
                                    <span class="m-fancy-title text-uppercase">{{ $pcharacter->faceclaim }}</span>
                                </div>
                                <div class="col-6">
                                    <a class="m-fancy-title text-uppercase text-center text-{{ strtolower($pcharacter->faction->name) }}" href="{{ $pcharacter->path }}"><i class="fas fa-{{ $pcharacter->faction->icon }}"></i> {{ $pcharacter->username }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection