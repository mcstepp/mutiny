@if($activity->type == 'created_thread')
    Created thread <a href="{{ $activity->subject->path() }}">{{ $activity->subject->title }}</a>
    {{ $activity->created_at->diffForHumans() }}
@endif

@if($activity->type == 'created_post')
    Posted in thread <a href="{{ $activity->subject->thread->path() }}"> {{ $activity->subject->thread->title }}</a>
    {{ $activity->created_at->diffForHumans() }}
@endif