<div class="sidebar bg-tall-city">
    <div class="sidebar-header">
        @if(Auth::user()->current_character())
            @include('layouts._current_character', ['user' => Auth::user()])
        @else
            @include('layouts._no_character')
        @endif
    </div>
    @include('layouts._navigation')

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>