@extends('layouts.main')

@section('content')

    <div class="container-fluid my-3">

        <div class="row">
            <h1 class="h2 page-title m-fancy-header neon-default">Your Pending Characters</h1>
        </div>
        <div class="page-desc p-md-5 m-md-2">
            <p>
                Pending characters description
            </p>
        </div>

        <div class="animated fadeId">

            <div class="card m-card bg-industrial">
                <div class="card-body">
                    <h2 class="card-title m-fancy-title text-uppercase">Awaiting Approval</h2>

                    <div class="list-group m-card">

                        @forelse($pending_characters as $pending_character)
                        <a href="{{ route('show-pending-character', $pending_character) }}" class="list-group-item">
                            {{ $pending_character->username() }}
                        </a>
                        @empty
                            None to show.
                        @endforelse
                    </div>

                </div>
            </div>

        </div>


    </div>

@endsection