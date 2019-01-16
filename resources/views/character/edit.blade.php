@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
    [
    'link-route' => route('character-list'),
    'link-name' => 'Characters'
    ],[
    'link-route' => route('character-profile', $character),
    'link-name' => $character->username
    ],[
    'link-name' => 'Character Preferences'
    ]
    ]])

    <div class="container-fluid my-3">
        <div class="row">
            <div class="col">
                <h1 class="h2 page-title m-fancy-header neon-default">Character Preferences</h1>

                <div class="page-desc p-md-5 m-md-2">
                    <p>
                        {{--This is a forum description. In an IC forum, this text would be describing the IC setting of the forum.--}}
                        {{--It can be broad, like "Common areas" or narrow like "Headquarters".--}}
                        Character preferences description goes here
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @include('character._details')
            </div>
        </div>

        <div class="row">
            <div class="col">
                @include('graphics.show', ['owner' => $character, 'type' => $type])
            </div>

        </div>

@endsection