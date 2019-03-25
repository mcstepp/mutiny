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

    <form action="{{ route('admin-update-character', ['character' => $character]) }}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="container-fluid my-3">
            <div class="row">
                <div class="col">
                    <input type="hidden" name="owner" value="{{ $character->user->id }}">
                    @include('character._basics')
                </div>
            </div>

            <div class="row">
                <div class="col">
                    @include('character._time')
                </div>
            </div>

            <div class="row">
                <div class="col">
                    @include('character._details')
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit"> Edit Character </button>
                </div>
            </div>

        </div>
    </form>
@endsection