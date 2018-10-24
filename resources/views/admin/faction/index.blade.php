@extends('layouts.main')

@section('content')

    <div class="container-fluid">

        <ol class="breadcrumb bg-mutinydark">
            <li class="breadcrumb-item">
                <a href="/admin">Admin Panel</a>
            </li>
            <li class="breadcrumb-item active">
                View All Factions
            </li>
        </ol>

        <h3>All Factions</h3>
        <div class="card m-card">
            <div class="card-body">
                @include('admin.faction._factionList', $factions)
            </div>
        </div>

        <h3>Add a New Faction</h3>
        @include('admin.faction._add')
    </div>

@endsection