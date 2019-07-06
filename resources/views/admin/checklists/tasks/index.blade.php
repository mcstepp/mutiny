@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
        [
        'link-name' => 'Admin Panel',
        'link-route' => route('adminPanel')
        ],[
        'link-route' => '#',
        'link-name' => 'Create New Task Category'
        ]
    ]])

    @include('admin.checklists.tasks._indexTaskCategories')
    @include('admin.checklists.tasks._createTaskCategory')

@endsection
