<div class="container-fluid my-3">
        <div class="card m-card bg-industrial-">
            <h2 class="card-top m-fancy-title text-uppercase text-center">Create a New Task Category</h2>
            <hr class="glow-default mt-0">

            <div class="card-body container-fluid">
                <form method="POST"
                      action="{{ route('admin-store-task-category') }}"
                      class="form-horizontal">
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label for="task_category_name" class="col-sm-2" class="control-label">
                            Task Category Name:
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="task_category_name" id="task_category_name" placeholder="Task Category Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="task_category_description" class="control-label col-sm-2">Task Category Description:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="7" name="task_category_description" id="task_category_description" placeholder="Task Category Description" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create Task Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
