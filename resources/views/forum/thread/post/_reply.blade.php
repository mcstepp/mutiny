<div class="container-fluid">
    <form method="POST"
          action="{{ route('reply', [$forum, $thread]) }}"
          class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-2">Thread Title:</label>
            <div class="col-sm-10">
                {{ $thread->title }}
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2">Thread Description:</label>
            <div class="col-sm-10">
                {{ $thread->description }}
            </div>
        </div>

        @if($forum->ic)

            <post-as character_list='{{ ${$key} }}'
                     user_data='{{ Auth::user() }}'
                     default={{ ${$current}->id }}></post-as>

        @else

            <post-as user_data='{{ Auth::user() }}'></post-as>

        @endif

        {{-- <div class="form-group row">
            <label for="body" class="control-label col-sm-2">Post Body:</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" name="body" id="body" placeholder="Thread text" required></textarea>
            </div>
        </div> --}}

        <div class="form-group row">
            <label for="body" class="control-label col-sm-2">Post Body:</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" name="body" id="body" placeholder="Thread text" required></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit Reply</button>
            </div>
        </div>
    </form>
</div>