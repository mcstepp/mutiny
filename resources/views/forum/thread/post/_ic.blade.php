<div class="container-fluid">
    <div class="row">
        @include("forum.thread.post._{$post->author_type}", ['author' => $post->author])
    </div>

    <div class="row">

        <div class="container-fluid p-0">
            <div class="row">

                <div class="col-md-9">

                    <div class="card m-card m-0">
                        <div class="m-post">
                            {!!  nl2br($post->body) !!}
                        </div>
                    </div>

                </div>

                <div class="col-md-3 m-0">

                    @include("forum.thread.post._metadata", [$forum, $thread, $post])

                </div>
            </div>
        </div>
    </div>
</div>