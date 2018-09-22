<div class="miniprofile p-3 w-100 flex-wrap container-fluid">
    <div class="row">
        <img src="http://placehold.it/100/303" width="100" height="100" class="order-lg-12 author-avatar">
        <div class="author-metadata order-lg-1">
            <h4><a href="{{ $author->path() }}">{{ $author->username }}</a></h4>
            <span style="font-weight: bold;">Supreme Mugwhump (Title)</span><br>
            <span style="font-weight: bold;"></span>
            {{-- {{$author->posts_count}} posts</span> --}}
        </div>
    </div>
    <div class="row">
        <div class="author-badges">
            <!-- TODO: Show different icon based on status, separate to new component -->
            <i class="fas fa-shield-alt"></i>
        </div>
    </div>
</div>