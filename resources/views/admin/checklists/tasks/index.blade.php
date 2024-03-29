@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
        [
        'link-name' => 'Admin Panel',
        'link-route' => route('adminPanel')
        ],[
        'link-route' => '#',
        'link-name' => 'Create New Task'
        ]
    ]])

    @include('admin.checklists.tasks._index')
    @include('admin.checklists.tasks._create')

@endsection
