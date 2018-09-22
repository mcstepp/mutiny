@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">{{ $forum->category->name }}</a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ $forum->path() }}">{{ $forum->name}}</a>
    </li>
    <li class="breadcrumb-menu">
        <div class="btn-group">
            <a class="btn flicker" href="#">
                <i class="fas fa-cogs"></i> Edit Forum
            </a>
        </div>
    </li>
</ol>

<div class="page-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="h2 m-fancy-header page-title neon-default">{{ $forum->name }}</h1>
                <div class="page-desc">{{ $forum->description }}</div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-7">
                <a class="btn btn-outline-primary" href="#">Create New Thread</a>
            </div>
            <div class="col-md-5 m-forum-metadata align-self-end justify-content-end m-fancy-title">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col align-self-end">
                            <span class="meta-label text-uppercase">Threads: </span>{{ $forum->threads->count() }}
                        </div>

                        <div class="col align-self-end">
                            <span class="meta-label text-uppercase">Posts: </span>{{ $forum->posts->count() }} 
                        </div>

                        <div class="col align-self-end">
                            <div class="btn-group">
                              <button type="button" class="btn btn-outline-primary">Sort By</button>
                              <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Last Reply (Default)</a>
                                <a class="dropdown-item" href="#">Title (Asc)</a>
                                <a class="dropdown-item" href="#">Title (Des)</a>
                                <a class="dropdown-item" href="#">Chronological (Asc)</a>
                                <a class="dropdown-item" href="#">Chronological (Des)</a>

                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid m-threads">

   @include('thread.row')

   @include('thread.row')

   @include('thread.row')

   @include('thread.row')

</div>

@endsection
