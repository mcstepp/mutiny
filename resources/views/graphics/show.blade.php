<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-6 order-2 order-md-first">
            <hr class="glow-default d-flex">
        </div>
        <div class="col-md-6 order-1 order-md-last">
            <h2 class="m-fancy-header neon-default text-uppercase text-center">
                The Graphics
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4">
            <div class="card m-card bg-industrial-dark">
                <div class="card-body">
                    Avatar, icon/gif. Icon is shown in most places, avatar shown in mini-profile and profile. <a href="https://nickpic.host" target="_blank">NickPic</a> is the approved host.
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card m-card">
                <div class="card-body container-fluid">

                    <div class="form-group row">
                        <div class="col-md-8">
                            <input type="hidden" name="_method" value="PUT">

                            {{ csrf_field() }}

                            <label for="avatar" class="control-label">
                                Avatar URL:
                            </label>
                            <input type="text" class="form-control" name="avatar" id="avatar" value="{{ $owner->graphics && $owner->graphics->avatar_url ? $owner->graphics->avatar_url : null }}">
                        </div>

                        <div class="col-md-4">
                            @include('graphics._avatar', [
                            'author' => $owner,
                            'type' => strtolower(class_basename($owner))])
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-8">
                            <label for="icon" class="control-label">
                                Icon URL:
                            </label>
                            <input type="text" class="form-control" name="icon" id="icon" value="{{ $owner->graphics && $owner->graphics->icon_url ? $owner->graphics->icon_url : null }}">
                        </div>

                        <div class="col-md-4 text-center">
                            @include('graphics._icon', [
                            'author' => $owner,
                            'type' => strtolower(class_basename($owner))])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
