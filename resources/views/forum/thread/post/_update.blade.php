<div class="container-fluid">
    <form method="POST"
          action="{{ route('update-post', [$forum, $thread, $post]) }}"
          class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

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

        @if($forum->ic && $forum->moderators->contains($post->author->user()))

            <post-as :characters="{{ json_encode($post->author->user->characters) }}"
                     :user="{{ json_encode($post->author->user()) }}"></post-as>

        @elseif($forum->ic && !$forum->moderators->contains($post->author->user()))

            <post-as :characters="{{ json_encode($post->author->user->characters) }}"></post-as>

        @else

            <post-as :user="{{ json_encode($post->author->user()) }}"></post-as>

        @endif

        <div class="form-group row">
            <label for="body" class="control-label col-sm-2">Post Body:</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" name="body" id="body" placeholder="Thread text" required>{{ $post->body }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit Post</button>
            </div>
        </div>
    </form>
</div>