@extends('layouts.main')

@section('content')

    <div class="container-fluid my-3">

        <div class="row">
            <h1 class="h2 page-title m-fancy-header neon-default">
                {{ $user->username }}'s Invitations</h1>
        </div>
        <div class="page-desc p-md-5 m-md-2">
            <p>
                Invitations
            </p>
        </div>

        <div class="card m-card">
            <div class="card-body text-center">
                <b>Invitations remaining: Unlimited</b>
            </div>

            <div class="card-body">

                <form action="{{ route('generate-invite') }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-info btn-lg btn-block m-fancy-title text-uppercase">Generate Code</button>
                </form>
            </div>
        </div>

        <div class="card m-card bg-industrial">
            <div class="card-body">
                <h2 class="card-title m-fancy-title text-uppercase">Available Invitation Codes</h2>

                <ul class="list-group m-card">

                    @forelse($invitations as $invitation)
                        <li class="list-group-item">
                            <b>{{ $invitation->code }}</b> (generated {{ $invitation->created_at->diffForHumans() }})
                        </li>
                    @empty
                        <li class="list-group-item disabled">None to show.</li>
                    @endforelse
                </ul>

            </div>
        </div>


    </div>

@endsection