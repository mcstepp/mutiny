<div class="card m-card m-text-shadow bg-industrial-primary">
    <div class="card-body p-3 clearfix">
        <i class="fas fa-comment-alt bg-primary p-3 font-2xl mr-3 float-left"></i>
        <div class="h2 mt-2 mb-0">{{ $ic_post_count + auth()->user()->posts_count }}</div>
        <div class="text-uppercase font-xs m-fancy-header">My Posts</div>
    </div>
    <div class="card-footer bg-primary px-3 py-2">
        <a class="text-white m-fancy-title text-uppercase font-xs btn-block flicker" href="#">View Breakdown <i class="text-white fa fa-angle-right float-right font-lg"></i></a>
    </div>
</div>