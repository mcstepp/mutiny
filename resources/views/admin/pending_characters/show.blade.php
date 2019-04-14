@extends('layouts.main')

@section('content')

    <div class="container-fluid my-3">

        <div class="row">
            <h1 class="h2 page-title m-fancy-header neon-default">Pending Character Application</h1>
        </div>
        <div class="page-desc p-md-5 m-md-2">
            <p>
                Stats and instructions on approvals
            </p>
        </div>

        <div class="row animated fadeId">

            <form method="POST"
                  action="{{ route('store-new-character') }}"
                  class="form-horizontal">
                {{ csrf_field() }}


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card m-card bg-industrial-dark">
                    <div class="card-top">
                        <h3 class="m-fancy-title uppercase text-center">
                            The Basics
                        </h3>
                        <hr class="glow-default">
                    </div>
                </div>

                <div class="card m-card">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="user_id" class="control-label">Player:</label>
                            </div>

                            <div class="col-md-10 d-flex">
                                {{ $character->user->username }}
                                <input type="hidden"
                                       class="form-control align-self-center"
                                       name="user_id"
                                       id="user_id"
                                       value="{{ $character->user->id }}"
                                       required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="first_name" class="control-label">First Name:</label>
                            </div>

                            <div class="col-md-10 d-flex">
                                {{ $character->first_name }}
                                <input type="hidden"
                                       class="form-control align-self-center"
                                       name="first_name"
                                       id="first_name"
                                       value="{{ $character->first_name }}"
                                       required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="chosen_name" class="control-label col-md-2">Chosen Name (Optional):</label>
                            <div class="col-md-10">
                                {{ $character->chosen_name }}
                                <input type="hidden"
                                       class="form-control"
                                       name="chosen_name"
                                       id="chosen_name"
                                       value="{{ $character->chosen_name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="control-label col-md-2">Last Name:</label>
                            <div class="col-md-10">
                                {{ $character->last_name }}
                                <input type="hidden"
                                       class="form-control"
                                       name="last_name"
                                       id="last_name"
                                       value="{{ $character->last_name }}"
                                       required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="origin_faction" class="control-label col-md-2">Faction of Origin:</label>
                            <div class="col-md-10">
                                {{ $character->origin_faction->name }}
                                <input type="hidden" name="origin_faction" value="{{ $character->origin_faction->id }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="faction" class="control-label col-md-2">Current Faction:</label>
                            <div class="col-md-10">
                                {{ $character->faction->name }}
                                <input type="hidden" name="faction" value="{{ $character->faction->id }}">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card m-card bg-industrial-dark">
                    <div class="card-top">
                        <h3 class="m-fancy-title uppercase text-center">
                            The Timeline
                        </h3>
                        <hr class="glow-default">
                    </div>
                </div>

                <div class="card m-card">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="birth_month" class="control-label col-md-2">Birth Month:</label>
                            <div class="col-md-10">
                                {{ DateTime::createFromFormat('!m', $character->ic_birth_month)->format('F') }}
                                <input type="hidden" name="ic_birth_month" id="birth_month" value="{{ $character->ic_birth_month }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="birth_day" class="control-label col-md-2">Birth Day:</label>
                            <div class="col-md-10">
                                {{ $character->ic_birth_day }}
                                <input type="hidden" name="ic_birth_day" id="birth_day" value="{{ $character->ic_birth_day }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth_year" class="control-label col-md-2">Birth Year:</label>
                            <div class="col-md-10">
                                {{ $character->ic_birth_year }}
                                <input type="hidden" name="ic_birth_year" id="birth_year" value="{{ $character->ic_birth_year }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="control-label col-md-2">Current Age:</label>
                            <div class="col-md-10">
                                {{ $character->age }}
                                <input type="hidden" name="age" id="age" value="{{ $character->age }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="initiation_year" class="control-label col-md-2">Initiation Year:</label>
                            <div class="col-md-10">
                                {{ $character->initiation_year }}
                                <input type="hidden" name="initiation_year" id="initiation_year" value="{{ $character->initiation_year }}">
                            </div>
                        </div>

                    </div>
                </div>

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
                                <occupation-claims :current="{{ json_encode($character) }}" :old="{{ json_encode(old()) }}"></occupation-claims>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="history" class="control-label">Back Story:</label>
                            </div>

                            <div class="col-md-10">
                                {!! nl2br($character->history) !!}
                                <input type="hidden" name="history" id="history" value="{{ $character->history }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="personality" class="control-label">Personality:</label>
                            </div>

                            <div class="col-md-10">
                                {!! nl2br($character->personality) !!}
                                <input type="hidden" name="personality" id="personality" value="{{ $character->personality }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2">
                                <label for="appearance" class="control-label">Appearance:</label>
                            </div>

                            <div class="col-md-10">
                                {!! nl2br($character->appearance) !!}
                                <input type="hidden" name="appearance" id="appearance" value="{{ $character->appearance }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-2 d-flex">
                                <label for="faceclaim" class="control-label align-self-center">Face Claim (Optional):</label>
                            </div>

                            <div class="col-md-10">
                                <input type="text" class="form-control" name="faceclaim" id="faceclaim" value="{{ $character->faceclaim }}">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="text-center">
                    <input type="hidden" name="owner" value="{{ $character->user_id }}">
                    <button type="submit" class="btn btn-primary text-uppercase m-fancy-title">Approve Character</button>
                </div>
            </form>
        </div>

        <hr class="glow-default">

        <div class="card bg-dark border-danger my-5">
            <div class="card-body">
                <form action="{{ route('admin-pend-character', $character) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <h3 class="m-fancy-header text-center">Pend Character</h3>
                    <hr class="glow-default">
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="reason" class="control-label">Reason:</label>
                        </div>

                        <div class="col-md-10">
                            <textarea name="reason" id="reason" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-danger text-uppercase m-fancy-title">Pend Character</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


@endsection