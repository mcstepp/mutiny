<div class="card m-card">

    <div class="card-body container-fluid">
        <form method="POST" action="/admin/rank" class="form-horizontal">

            {{ csrf_field() }}

            <div class="form-group row">
                <label for="name" class="col-sm-2 control-label m-fancy-title">Rank Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Rank Name">
                </div>
            </div>


            <div class="form-group row">
                <label for="description" class="col-sm-2 control-label m-fancy-title">Rank Description:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description" placeholder="Rank description" rows="5"></textarea>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Create Rank</button>
                </div>
            </div>

        </form>
    </div>
</div>