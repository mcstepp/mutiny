<div id="m-announcements" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators d-none d-md-flex">
        @foreach($announcements as $announcement)
            @if($loop->first)
                <li data-target="#m-announcements" data-slide-to="{{ $loop->index }}" class="active"></li>

            @else
                <li data-target="#m-announcements" data-slide-to="{{ $loop->index }}" class=""></li>
            @endif
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($announcements as $announcement)
            @if($loop->first)
                <div class="carousel-item active">
            @else
                <div class="carousel-item">
            @endif

                    <img class="d-block w-100" style="object-fit:cover; height: 50vh; object-position: center bottom;" src="{{ $announcement->image_path }}">

                    <div class="carousel-caption m-text-shadow">
                        <a class="text-white h3 m-fancy-title text-uppercase d-block" href="/f/{{$announcement->thread->forum_id}}/t/{{ $announcement->thread->slug }}">{{ $announcement->thread->title }}</a>
                        <a class="text-white d-block" href=/f/{{$announcement->thread->forum_id}}/t/{{ $announcement->thread->slug }}">{{ $announcement->thread->description }}</a>
                    </div>

                </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#m-announcements" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#m-announcements" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>