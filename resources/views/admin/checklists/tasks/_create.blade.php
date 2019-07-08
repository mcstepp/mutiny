<div class="container-fluid my-3">
    <div class="card m-card bg-industrial-">
        <h2 class="card-top m-fancy-title text-uppercase text-center">Create a New Task</h2>
        <hr class="glow-default mt-0">

        <div class="card-body container-fluid">
            <form method="POST"
                  action="{{ route('admin-store-tasks') }}"
                  class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="task_category" class="col-sm-2 control-label">
                        Task Category:
                    </label>
                    <div class="col-sm-10">
                       <select name="task_category" id="task_category">
                            @foreach($taskCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                       </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="task_points" class="col-sm-2 control-label">
                        Points:
                    </label>
                    <div class="col-sm-10">
                        <select name="task_points" id="task_points">
                            <option value="5">5</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="task_description" class="control-label col-sm-2">Task  Description:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="7" name="task_description" id="task_description" placeholder="Task Category Description" required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Create Task</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
