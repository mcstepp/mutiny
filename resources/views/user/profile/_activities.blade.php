<ul>
    @foreach($activities as $activity)
        <li>
            @include('user.profile._activity', $activity)
        </li>
    @endforeach
</ul>