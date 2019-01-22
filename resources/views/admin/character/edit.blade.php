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

    <form>
        <div class="container-fluid my-3">
            <div class="row"></div>
            <div class="row">
                <div class="col">
                    @include('character._basics')
                </div>
            </div>

            <div class="row">
                <div class="col">
                    @include('character._details')
                </div>
            </div>
        </div>
    </form>
@endsection