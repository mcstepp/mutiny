@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-name' => 'Admin Panel',
    'link-route' => route('adminPanel')
    ],[
    'link-name' => 'Forum Index'
    ]
    ]])

    <div class="container-fluid my-3">

        <h1 class="m-fancy-header neon-default mb-4">Forum Index</h1>

        <div class="row">
            @foreach($categories as $category)
            <div class="col-lg-4 col-md-6">
                <div class="m-card card bg-industrial-dark">
                    <div class="card-top">
                        <h2 class="m-fancy-title text-uppercase text-center">{{ $category->name }}</h2>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach($category->forums as $forum)
                                <li>
                                    <a href="{{$forum->path()}}">{{$forum->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection