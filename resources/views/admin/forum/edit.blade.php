@extends('layouts.main')

@section('content')

    @include('layouts._breadcrumb', ['menu' => [
        [
        'link-route' => route('adminPanel'),
        'link-name' => 'Admin Panel'
        ],[
        'link-name' => 'Edit Forum'
        ]
    ]])

    <div class="container-fluid my-3">

        <div class="card m-card bg-industrial-dark">
            <h2 class="card-top m-fancy-title text-uppercase">Edit a Category</h2>

            <form method="POST" action="{{ route('admin-update-category') }}" class="form-horizontal">

                {{ csrf_field() }}

                <input type="hidden" name="_method" value="PUT">

                <category-edit :categories="{{ json_encode($categories)}}"></category-edit>

            </form>
        </div>


        <div class="card m-card bg-industrial-dark">
            <h2 class="card-top m-fancy-title text-uppercase">Edit a Forum</h2>

            <form method="POST" action="{{ route('admin-update-forum') }}" class="form-horizontal">

                {{ csrf_field() }}

                <input type="hidden" name="_method" value="PUT">

            <forum-edit :categories="{{ json_encode($categories) }}"
                        :forums="{{ json_encode($forums) }}"></forum-edit>

            </form>

        </div>
    </div>

@endsection