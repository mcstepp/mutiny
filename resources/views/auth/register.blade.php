@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="card m-card bg-industrial-dark">
        <div class="card-top">
            <h1 class="h2 text-center m-fancy-header neon-default">Register</h1>
            <hr class="glow-default">
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="card-body">

                <div class="form-group row {{ $errors->has('code') ? ' has-error' : '' }}">
                    <label for="code" class="col-md-4 control-label">Invitation Code:</label>

                    <div class="col-md-8">
                        <input id="code" type="text" class="form-control" name="code" required autofocus>

                        @if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

            </div>

            <hr class="glow-default">

            <div class="card-body">

                <div class="form-group row {{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="col-md-4 control-label">Username</label>

                    <div class="col-md-8">
                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('alias') ? ' has-error' : '' }}">
                    <label for="alias" class="col-md-4 control-label">Alias</label>

                    <div class="col-md-8">
                        <input id="alias" type="text" class="form-control" name="alias" value="{{ old('alias') }}" required autofocus>

                        @if ($errors->has('alias'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alias') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>

            <hr class="glow-default">

            <div class="card-body">

                <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                        {!! NoCaptcha::display() !!}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('captcha')
    {!! NoCaptcha::renderJs() !!}
@endsection
