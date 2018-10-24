@if(count($factions) > 0)
    <ul class="list-group">
        @foreach($factions as $faction)
            <li class="list-group-item">{{ $faction->name }}: {{ $faction->description }}</li>
        @endforeach
    </ul>
@else
    No factions to show.
@endif