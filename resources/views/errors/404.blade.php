@extends('layouts.main')

@section('content')

<div class="container-fluid my-3">

    <div class="card m-card bg-industrial-dark text-center">
        <div class="card-top">
            <h3 class="m-fancy-title uppercase text-center">
                404
            </h3>
            <hr class="glow-default">
        </div>
        <div class="card-body">
            {{ $exception->getMessage() }}
        </div>
    </div>

</div>

@endsection