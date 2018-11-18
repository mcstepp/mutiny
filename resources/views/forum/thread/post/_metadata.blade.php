<div class="card m-card bg-mutinydark">
    <div class="post-metadata text-center card-body">
        <span class="date-posted">posted {{ $post->created_at->diffForHumans() }} on {{ $post->created_at->format('M j, Y') }}</span>
    </div>
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