@extends('layouts.main')

@section('content')

    <div class="container-fluid">

        <ol class="breadcrumb bg-mutinydark">
            <li class="breadcrumb-item">
                <a href="/admin">Admin Panel</a>
            </li>
            <li class="breadcrumb-item active">
                View All Ranks
            </li>
        </ol>

        <h3>All Ranks</h3>
            <div class="card m-card">
                <div class="card-body">
                    @include('admin.rank._rankList', $ranks)
            </div>

    </div>

@endsection

