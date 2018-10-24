<div class="card m-card">

    <div class="card-body container-fluid">
        <form method="POST" action="{{ route('admin-store-faction') }}" class="form-horizontal">

            {{ csrf_field() }}

            <div class="form-group row">
                <label for="name" class="col-sm-2 control-label m-fancy-title">Faction Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Faction Name">
                </div>
            </div>


            <div class="form-group row">
                <label for="description" class="col-sm-2 control-label m-fancy-title">Faction Description:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description" placeholder="Faction description" rows="5"></textarea>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Create Faction</button>
                </div>
            </div>

        </form>
    </div>
</div>

