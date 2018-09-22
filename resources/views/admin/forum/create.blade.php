@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">Admin Panel</a></li>
        <li class="breadcrumb-item active">Create a New Forum</li>
    </ol>

    <div class="card m-card">
        <h2 class="card-top m-fancy-title text-uppercase">Create a New Category</h2>

        <div class="card-body container-fluid">
            <form method="POST" action="/admin/category" class="form-horizontal">

                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="name" class="col-sm-2 control-label">Category Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Forum Name">
                    </div>
                </div>

                
                <div class="form-group row">
                    <label for="description" class="col-sm-2 control-label">Category Description:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" id="description" placeholder="Forum description" rows="5"></textarea>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Create Category</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


    <div class="card m-card">
        <h2 class="card-top m-fancy-title text-uppercase">Create a New Forum</h2>

        <div class="card-body container-fluid">
            <form method="POST" action="/admin/forum" class="form-horizontal">

                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="name" class="col-sm-2 control-label">Category Name:</label>
                    <div class="col-sm-10">
                       <select name="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                       </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 control-label">Forum Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Forum Name">
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-2 control-label">Forum Settings:</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" name="private" type="checkbox" value="true">
                                Private/Hidden
                            </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" name="ic" type="checkbox" value="true">
                            In-Character
                          </label>
                        </div>
                    </div>
                </div>

                
                <div class="form-group row">
                    <label for="description" class="col-sm-2 control-label">Forum Description:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" id="description" placeholder="Forum description" rows="5"></textarea>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Create Forum</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection