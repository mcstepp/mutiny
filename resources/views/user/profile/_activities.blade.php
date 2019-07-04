<ul>
    @foreach($activities as $activity)
            @include('user.profile._activity', $activity)
    @endforeach
</ul>