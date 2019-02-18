@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
        [
        'link-name' => 'Admin Panel',
        'link-route' => route('adminPanel')
        ],[
        'link-name' => 'Edit Character'
        ]
        ]])

    <div class="container-fluid my-3">

        <div class="row">
            <h1 class="m-fancy-header neon-default">Edit Character</h1>

        </div>

            <character-filter :list="{{ json_encode($characters) }}"></character-filter>




@endsection