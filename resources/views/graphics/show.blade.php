<div class="card m-card bg-industrial-dark">
    <div class="card-top">
        <h3 class="m-fancy-title uppercase text-center">
            Graphics
        </h3>
        <hr class="glow-default">
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('update-'.$type.'-graphics', $owner) }}" class="form-horizontal">

            <input type="hidden" name="_method" value="PUT">

            {{ csrf_field() }}

            <div class="row">

            </div>

            <div class="form-group row d-flex">
                <div class="col-md-2 d-flex align-content-stretch">
                    <label for="avatar" class="control-label align-self-center">
                        Avatar URL:
                    </label>
                </div>
                <div class="col-md-8 d-flex align-content-stretch">
                    <input type="text" class="form-control align-self-center" name="avatar" id="avatar" value="{{ $owner->graphics && $owner->graphics->avatar_url ? $owner->graphics->avatar_url : null }}">
                </div>

                <div class="col-md-2">
                    @if($owner->graphics && $owner->graphics->avatar_url)
                        <img src="{{ $owner->graphics->avatar_url }}" class="m-avatar img-thumbnail" alt="Avatar">
                    @else
                        <img src="https://via.placeholder.com/200x300" class="m-avatar img-thumbnail" alt="Avatar">
                    @endif

                </div>
            </div>

            <div class="form-group row d-flex">
                <div class="col-md-2 d-flex align-content-stretch">
                    <label for="icon" class="control-label align-self-center">
                        Icon URL:

                    </label>
                </div>
                <div class="col-md-8 d-flex align-content-stretch">
                    <input type="text" class="form-control align-self-center" name="icon" id="icon" value="{{ $owner->graphics && $owner->graphics->icon_url ? $owner->graphics->icon_url : null }}">
                </div>

                <div class="col-md-2 text-center">
                    @if($owner->graphics && $owner->graphics->icon_url)
                        <img src="{{ $owner->graphics->icon_url }}" class="img-avatar img-thumbnail m-icon" alt="icon">
                    @else
                        <img src="https://via.placeholder.com/150" class="img-avatar img-thumbnail m-icon" alt="Icon">
                    @endif

                </div>
            </div>

            <hr class="glow-default">

            <div class="form-group row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary text-uppercase m-fancy-title">Update Graphics</button>
                </div>
            </div>

        </form>

    </div>

</div>