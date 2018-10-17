<div class="card m-card bg-mutinydark">
    <div class="post-metadata text-center card-body">
        <span class="date-posted">posted {{ $post->created_at->diffForHumans() }} on {{ $post->created_at->format('M j, Y') }}</span>
    </div>
</div>

<a class="btn btn-outline-primary btn-block mb-4 m-fancy-title text-uppercase" href=" {{ route('edit-post', [$forum, $thread, $post]) }}">
    <i class="fas fa-edit"></i> Edit Post
</a>
<a class="btn btn-outline-danger btn-block m-fancy-title text-uppercase" href="#">
    <i class="fas fa-trash-alt"></i> Delete Post
</a>