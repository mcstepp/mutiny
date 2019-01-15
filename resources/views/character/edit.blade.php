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
                <div class="card m-card bg-industrial-dark">
                    <div class="card-top">
                        <h3 class="m-fancy-title uppercase text-center">
                            The Details
                        </h3>
                        <hr class="glow-default">
                    </div>
                    <div class="card-body">
                        History, personality, appearance, face claim
                    </div>
                </div>

                <div class="card m-card">
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-md-2 d-flex">
                                <label for="occupation" class="control-label align-self-center">Occupation:</label>
                            </div>

                            <div class="col-md-10">
                                <input type="text" class="form-control" name="occupation" id="occupation">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="history" class="control-label">Back Story:</label>
                            </div>

                            <div class="col-md-10">
                                <textarea class="form-control" rows="3" name="history" id="history"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="history" class="control-label">Personality:</label>
                            </div>

                            <div class="col-md-10">
                                <textarea class="form-control" rows="3" name="personality" id="personality"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="appearance" class="control-label">Appearance:</label>
                            </div>

                            <div class="col-md-10">
                                <textarea class="form-control" rows="3" name="appearance" id="appearance"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 d-flex">
                                <label for="faceclaim" class="control-label align-self-center">Face Claim (Optional):</label>
                            </div>

                            <div class="col-md-10">
                                <input type="text" class="form-control" name="faceclaim" id="faceclaim">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @include('graphics.show', ['owner' => $character, 'type' => $type])
            </div>

        </div>

@endsection