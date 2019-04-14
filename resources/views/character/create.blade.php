@extends('layouts.main')

@section('content')

    <div class="container-fluid my-3">

        <div class="row">
            <h1 class="h2 page-title m-fancy-header neon-default">Create a New Character</h1>
        </div>
        <div class="page-desc p-md-5 m-md-2">
            <p>
                It's time to create a character! Fill out the application below and within 24-48 hours, you will receive acceptance or feedback from a staff member. If you have any questions, feel free to send a private message to `disco before the breakdown` or post in the Welcome forum!
            </p>
        </div>

        <div class="animated fadeId">

            <form method="POST"
            action="{{ route('store-pending-character') }}">
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

                <div class="container-fluid my-3">
                    <div class="row pt-4">
                        @include('character._basics')
                    </div>

                    <div class="row pt-4">
                        @include('character._time')
                    </div>

                    <div class="row pt-4">
                        @include('character._details')
                    </div>

                    <div class="row pt-4">
                        @include('character._claims')
                    </div>

                    <div class="row">
                        <div class="card m-card bg-industrial-dark">
                            <div class="card-top">
                                <h3 class="m-fancy-title uppercase text-center">
                                    Submission
                                </h3>
                                <hr class="glow-default">
                            </div>
                            <div class="card-body">
                                <h4 class="text-uppercase m-fancy-title d-inline-block">Work In Progress | </h4>
                                <span>
                            Your character's given name at birth. Your character might go by a nickname, or a shortened version of their name, or may have even given themselves a new name at initiation. There's a different section for that after this field. What is the first name on the birth certificate of your character?
                        </span>
                            </div>
                        </div>

                        <div class="card m-card">
                            <div class="card-body">
                                <div class="form-group row px-5">
                                    <div class="form-check text-center my-0 mx-auto">
                                        <input class="form-check-input" type="checkbox" name="save" id="wip" checked>
                                        <label class="form-check-label" for="wip">Work In Progress</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <input type="hidden" name="owner" value="{{ $character->user_id }}">
                        <button type="submit" class="btn btn-primary text-uppercase m-fancy-title">Submit Character</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection