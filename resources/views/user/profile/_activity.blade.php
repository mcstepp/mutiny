@if($activity->type == 'created_thread')
    <li>Created thread <a href="{{ $activity->subject->path() }}">{{ $activity->subject->title }}</a>
        {{ $activity->created_at->diffForHumans() }}</li>
@endif

@if($activity->type == 'created_post')
   <li>
       Posted in thread <a href="{{ $activity->subject->thread->path() }}"> {{ $activity->subject->thread->title }}</a>
       {{ $activity->created_at->diffForHumans() }}
   </li>
@endif