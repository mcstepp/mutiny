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

    <div class="container-fluid my-3">
        <div class="card m-card bg-industrial-">
            <h2 class="card-top m-fancy-title text-uppercase text-center">Create a New Task</h2>
            <hr class="glow-default mt-0">

            <div class="card-body container-fluid">
                <form method="POST"
                      action="{{ route('admin-store-task') }}"
                      class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label for="path" class="col-sm-2" class="control-label">
                            Announcement Image:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="image_path" id="path" placeholder="Announcement Image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-sm-2" class="control-label">
                            Announcement Title:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Announcement Title" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-2" class="control-label">
                            Announcement Description:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="description" id="description" placeholder="Announcement Description">
                        </div>
                    </div>


                    {{-- <div class="form-group row">
                        <label for="body" class="control-label col-sm-2">Post Body:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" name="body" id="body" placeholder="Thread text" required></textarea>
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label for="body" class="control-label col-sm-2">Announcement Body:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="7" name="body" id="body" placeholder="Announcement text" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create Announcement</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
