<div class="card m-card bg-mutinydark">
    <div class="post-metadata text-center card-body">
        <span class="date-posted">Posted {{ $post->created_at->diffForHumans() }} on
            <br>{{ $post->created_at->format('M j, Y') }}</span>
    </div>

    @if($post->created_at != $post->updated_at)
    <div class="post-metadata text-center card-body">
        <span class="date-posted">Last updated {{ $post->updated_at->diffForHumans() }} on
            <br>{{ $post->updated_at->format('M j, Y') }}</span>
            <br>
        {{--<small><a class="text-gray-300" href="#">--}}
                {{--<i class="fa fa-history"></i>--}}
                    {{--History--}}
                {{--</a></small>--}}
        <post-history path="{{ $post->path() }}"></post-history>
    </div>
    @endif
</div>

@can('update', $post)
    <a class="btn btn-outline-primary btn-block mb-4 m-fancy-title text-uppercase" href=" {{ route('edit-post', [$forum, $thread, $post]) }}">
        <i class="fas fa-edit"></i> Edit Post
    </a>
@endcan

@can('delete', $post)
    <delete-button
            :post="{{ $post }}"
            :thread="{{ $thread }}"
            :forum="{{ $forum }}"
            deleteType="post">
    </delete-button>
@endcan