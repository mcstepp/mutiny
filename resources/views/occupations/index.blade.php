@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => 'Occupation Claims'
    ]
    ]])

    <div class="container-fluid my-3">

        <div class="row">
            <div class="col">
                <h1 class="m-fancy-header neon-default">Occupation Claims</h1>
                <p>Description</p>
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

                    @foreach($faction->industries as $industry)
                    <div class="card-body">
                        <p>
                            <span class="m-fancy-title text-center text-uppercase h5 text-{{ strtolower($faction->name) }}">
                                {{ $industry->name }} | </span> {{ $industry->description }}
                        </p>

                        <ul class="list-unstyled">
                            @foreach($industry->jobs as $job)
                                <li><span class="m-fancy-title text-uppercase text-{{ strtolower($faction->name) }}">{{ $job->name }}</span>:
                                @forelse($job->characters as $character)
                                        <a href="{{ $character->path }}" target="_blank">{{ $character->username }}</a> -

                                @empty
                                (None)
                                @endforelse
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection