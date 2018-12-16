@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => 'Users'
    ]
    ]])

    <div class="container-fluid my-3">



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