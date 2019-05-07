@extends('layouts.main')

@section('content')

    <div class="container-fluid my-3">

        <div class="row">
            <h1 class="h2 page-title m-fancy-header neon-default">Edit a New Character</h1>
        </div>
        <div class="page-desc p-md-5 m-md-2">
            <p>Make your edits or additions to the application below and within 24-48 hours, you will receive acceptance or feedback from a staff member. If you have any questions, feel free to send a private message to `disco before the breakdown` or post in the <a href="#linkToWelcomeForum">Welcome forum</a>!
            </p>
        </div>

        <div class="animated fadeId">

            <form method="POST"
                  action="{{ route('update-pending-character', $character) }}"
                  class="form-horizontal">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">


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

                    <div class="row pt-4">
                        <div class="container-fluid mb-5">
                            <div class="row">
                                <div class="col-md-6 order-2 order-md-first">
                                    <hr class="glow-default d-flex">
                                </div>
                                <div class="col-md-6 order-1 order-md-last">
                                    <h2 class="m-fancy-header neon-default text-uppercase text-center">
                                        Submission
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card m-card bg-industrial-dark">
                                <div class="card-body">
                                    <h4 class="text-uppercase m-fancy-title d-inline-block">Work In Progress | </h4>
                                    <span>Not finished yet? Save your progress for later. You will be able to see your pending character's profile, but it will not be added to the queue for acceptance unless this is <b>unchecked</b>.</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8">
                            <div class="card m-card">
                                <div class="card-body">
                                    <div class="form-group row px-5">
                                        <div class="form-check text-center my-0 mx-auto">
                                            <input class="form-check-input form-control form-control-lg" type="checkbox" name="save" id="wip" checked>
                                            <label class="form-check-label" for="wip">Work In Progress</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <input type="hidden" name="owner" value="{{ $character->user_id }}">
                        <button type="submit" class="btn btn-primary text-uppercase m-fancy-title mx-auto">Submit Character</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

@endsection