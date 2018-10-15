@extends('layouts.main')

@section('content')

    <div class="container-fluid my-3">

        <div class="row">
            <div class="col-md-7">
                <h1 class="h2 page-title m-fancy-header neon-default">{{ $forum->name }}</h1>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="text-center title">
                            <span class="m-fancy-title">Threads: </span>
                            <strong>4,100</strong>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="text-center title">
                            <span class="m-fancy-title">Replies: </span>
                            <strong>10,456</strong>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="text-center title">
                            <span class="m-fancy-title">Participants: </span>
                            <strong>17</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-desc">
            <p>
                {{--This is a forum description. In an IC forum, this text would be describing the IC setting of the forum.--}}
                {{--It can be broad, like "Common areas" or narrow like "Headquarters".--}}
                {{ $forum->description }}
            </p>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-outline-secondary m-1" href="{{ route('create-thread', $forum) }}">
                    <i class="far fa-edit"></i>
                    Create New Thread
                </a>
            </div>

            <div class="col align-self-end text-right">
                <div class="btn-group">
                    <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort By
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Last reply</a>
                        <a class="dropdown-item" href="#">Thread Start</a>
                        <a class="dropdown-item" href="#">A-Z</a>
                        <a class="dropdown-item" href="#">Z-A</a>
                        <a class="dropdown-item" href="#">Chronological</a>
                    </div>
                </div>
                <a class="btn btn-outline-primary m-1" role="button" href="#">
                    <i class="fas fa-cogs"></i>
                    Edit Forum
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid my-3">
        <div class="animated fadeId">

            @foreach($threads as $thread)
                @include('layouts.forumthreads', [$forum, $thread])
            @endforeach

        </div>
    </div>
@endsection