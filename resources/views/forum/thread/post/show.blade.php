<div class="row m-thread-post">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">

                <div class="m-card card m-thread-post-card">

                    @include("forum.thread.post.{$post->author_type}", ['author' => $post->author])

                    <div class="m-card card m-thread-post-card">
                        <div class="card-header post-metadata text-right">
                            <span class="date-posted">posted {{ $post->created_at->diffForHumans() }}</span>
                        </div>

                        <div class="card-body">
                            {!!  nl2br($post->body) !!}
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<hr>