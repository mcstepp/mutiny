@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
        [
        'link-name' => 'Admin Panel',
        'link-route' => route('adminPanel')
        ],[
        'link-route' => '#',
        'link-name' => 'Edit Character'
        ],[
        'link-name' => $character->username()
        ]
        ]])


    <div class="container-fluid my-3">

    </div>

@endsection