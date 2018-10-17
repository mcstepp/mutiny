<div class="row m-thread-post my-5">

    @includeWhen($post->author_type === "user", "forum.thread.post._ooc", [$forum, $thread, $post])

    @includeWhen($post->author_type === "character", "forum.thread.post._ic", [$forum, $thread, $post])

</div>

<hr class="glow-default">

