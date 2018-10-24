@if(count($ranks) > 0)
<ul class="list-group">
    @foreach($ranks as $rank)
        <li class="list-group-item">Quisque hendrerit orci</li>
    @endforeach
</ul>
    @else
    No ranks to show.
@endif