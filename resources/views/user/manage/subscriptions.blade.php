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

                <div class="card m-card bg-industrial">
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                            <tr class="bg-primary text-uppercase m-fancy-title">
                                <th>Topic Title</th>
                                <th>Last Post Date</th>
                                <th>Last Post By</th>
                                <th>Started By</th>
                                <th>Unsubscribe</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($subscriptions as $subscription)
                                <tr>
                                    <td><a href="{{ $subscription->path }}">{{ $subscription->title }}</a></td>
                                    <td>{{ $subscription->lastPost->updated_at->format('F j, Y') }}</td>
                                    <td><a href="{{ $subscription->lastPost->author->path }}">{{ $subscription->lastPost->author->username }}</a></td>
                                    <td><a href="{{ $subscription->firstPost->author->path }}">{{ $subscription->firstPost->author->username }}</a></td>
                                    <td><subscribe-button is-subscribed="true" path="{{ $subscription->path }}"></subscribe-button></td>
                                </tr>
                            @empty
                                <tr>
                                    <td>None to show.</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection