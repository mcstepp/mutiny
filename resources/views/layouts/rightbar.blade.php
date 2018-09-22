@if(Auth::user() && count(${$key}) > 0)

<div class="m-panel m-char-info p-3 mb-3">
	<h3 class="h6 m-fancy-header">Current Character</h5>

	<div class="media flex-wrap py-2">
		<div class="media-body px-2">
			@if(${$current})
			<ul class="list-unstyled m-char-links">
				<li><a href="/character/{{ ${$current}->id }}">
					{{ ${$current}->username }}</a></li>
				<li>{{ ${$current}->subspecies->species->name }}</li>
				<li>({{ ${$current}->subspecies->name }})</li>
				<li>${{ ${$current}->money }}</li>
				<li><a href="/inventory">Inventory</a></li>
			</ul>
			@endif

			<change-character list='{{ ${$key} }}' character_id={{ ${$current}->id or 0 }}></change-character>

		</div>
		<img src="http://placehold.it/64" class="m-mini-avatar" alt="Generic placeholder image">
	</div>
</div>
@endif

<div class="m-panel p-3 mb-3">
	<h3 class="h6 m-fancy-header">Characters</h3>
	<ul class="list-unstyled">
		<li><a href="/character/create">Create a New Character</a></li>
	    <li><a href="/f/1">Character Portrayals</a></li>
	    <li><a href="/f/1">Character Inspiration</a></li>
	    <li><a href="/f/1">Character Development</a></li>
	    <li><a href="/f/1">From a Distance</a></li>
	    <li><a href="/f/1">Social Media</a></li>
	</ul>
</div>

<div class="m-panel p-3 mb-3">
	<h3 class="h6 m-fancy-header">Plotting</h3>
	<ul class="list-unstyled">
	    <li><a href="/f/1">Site Wide Plot</a></li>
	    <li><a href="/f/1">Sub-Plots</a></li>
	</ul>
</div>

<div class="m-panel p-3 mb-3">
	<h3 class="h6 m-fancy-header">Information</h3>
	<ul class="list-unstyled">
	    <li><a href="/f/1">About Seattle</a></li>
	    <li><a href="/f/1">Equinox Lore</a></li>
	    <li><a href="/f/1">Tutorials</a></li>
	</ul>
</div>