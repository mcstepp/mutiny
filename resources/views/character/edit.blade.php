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
                <h1 class="m-fancy-header neon-default">Character Preferences and Profile</h1>

                <div class="p-md-5 m-md-2">
                    <p>
                        {{--This is a forum description. In an IC forum, this text would be describing the IC setting of the forum.--}}
                        {{--It can be broad, like "Common areas" or narrow like "Headquarters".--}}
                        Character preferences/profile description goes here
                    </p>

                    @if ($errors->any())
                        <div class="alert alert-danger">gra
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <form method="post"
              action="{{ route('update-character', $character) }}">

            <div class="row pt-4">

                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                @include('character._details')

            </div>

            <div class="form-group row pb-5">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary text-uppercase m-fancy-title">Update Character</button>
                </div>
            </div>

        </form>

        <form method="POST" action="{{ route('update-'.$type.'-graphics', $character) }}" class="form-horizontal">
            <div class="row pt-5">
                @include('graphics.show', ['owner' => $character, 'type' => $type])
            </div>

            <div class="form-group row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary text-uppercase m-fancy-title">Update Graphics</button>
                </div>
            </div>
        </form>
    </div>

@endsection