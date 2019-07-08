<div class="container-fluid my-3">
    <div class="card m-card bg-industrial-">
        <h2 class="card-top m-fancy-title text-uppercase text-center">Create a New Bonus Mode</h2>
        <hr class="glow-default mt-0">

        <div class="card-body container-fluid">
            <form method="POST"
                  action="{{ route('admin-store-bonus-mode') }}"
                  class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="bonus_mode_name" class="col-sm-2" class="control-label">
                        Bonus Mode Name:
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="bonus_mode_name" id="bonus_mode_name" placeholder="Bonus Mode Name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="bonus_mode_description" class="control-label col-sm-2">Bonus Mode Description:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="7" name="bonus_mode_description" id="bonus_mode_description" placeholder="Bonus Mode Description" required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Create Bonus Mode</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
