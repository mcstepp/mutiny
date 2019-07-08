@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
        [
        'link-name' => 'Admin Panel',
        'link-route' => route('adminPanel')
        ],[
        'link-route' => '#',
        'link-name' => 'Create a New Bonus Mode'
        ]
    ]])

    @include('admin.checklists.bonus_modes._index')
    @include('admin.checklists.bonus_modes._create')

@endsection