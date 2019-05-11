<div class="card m-card m-text-shadow bg-industrial-secondary">
    <div class="card-body p-3 clearfix">
        <i class="fas fa-user-clock bg-secondary p-3 font-2xl mr-3 float-left"></i>
        <div class="h2 mt-2 mb-0">{{ $users->count() }}</div>
        <div class="text-uppercase font-xs m-fancy-header">Online {{str_plural('user',$users->count())}}</div>
    </div>
    <div class="card-footer bg-secondary px-3 py-2">
        <a class="m-fancy-title text-uppercase font-xs btn-block flicker text-white" href="#">Last 24 hours <i class="fas fa-calendar-alt float-right font-lg"></i></a>
    </div>
</div>