@extends('layouts.app')

@section('content')
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Admin Panel</li>
        </ol>

        <div class="container-fluid">

            <div class="card m-card">
                <div class="card-body">
                    <h2 class="card-title m-fancy-title text-uppercase">Forum Settings</h2>

                    <div class="list-group">
                        <a href="/admin/forum/create" class="list-group-item">
                            Create a New Forum
                        </a>
                        <a href="#" class="list-group-item disabled">
                            Edit a Forum
                        </a>
                    </div>

                </div>
            </div>

            <div class="card m-card">
                <div class="card-body">
                    <h2 class="card-title m-fancy-title text-uppercase">Character Settings</h2>

                    <div class="list-group">
                        <a href="/admin/pending" class="list-group-item default">
                            New Applications
                        </a>
                        <a href="#" class="list-group-item disabled">
                            Edit a Character
                        </a>

                        <a href="{{ route('admin-rank') }}" class="list-group-item">
                            View All Ranks
                        </a>

                        <a href="{{ route('admin-create-rank') }}" class="list-group-item">
                            Create A New Rank
                        </a>
                    </div>

                </div>
            </div>

        </div>
@endsection