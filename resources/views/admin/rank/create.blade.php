@extends('layouts.main')

@section('content')

    <div class="container-fluid">

        <ol class="breadcrumb bg-mutinydark">
            <li class="breadcrumb-item">
                <a href="/admin">Admin Panel</a>
            </li>
            <li class="breadcrumb-item active">
                Add New Rank
            </li>
        </ol>

        <h3 class="m-fancy-header">Create a New Rank</h3>
        <div class="card m-card">
            <div class="card-body">
                @include('admin.rank._add')
            </div>

        </div>

@endsection