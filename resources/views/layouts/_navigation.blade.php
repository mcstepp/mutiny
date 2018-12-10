<nav class="sidebar-nav m-fancy-title text-uppercase">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href=" {{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a> {{-- <span class="badge badge-info">NEW</span></a> --}}
        </li>

        @foreach($categories as $category)
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-{{$category->icon}}"></i> {{$category->name}}</a>
                @if($category->forums)
                    <ul class="nav-dropdown-items">
                        @foreach($category->forums as $forum)
                            <li class="nav-item">
                                <a class="nav-link" href=" {{route('view-forum', $forum)}}"><i class="fas fa-{{$category->icon}}"></i> {{$forum->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif

            </li>
        @endforeach

        {{--<li class="nav-item nav-dropdown">--}}
            {{--<a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-landmark"></i> City Central</a>--}}
            {{--<ul class="nav-dropdown-items">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-landmark"></i> Council Chambers</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-landmark"></i> Initiation Hall</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-landmark"></i> Factionless Underground</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-landmark"></i> Common Grounds</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="nav-item nav-dropdown">--}}
            {{--<a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-hands-helping"></i> Abnegation</a>--}}
            {{--<ul class="nav-dropdown-items">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-hands-helping"></i> Headquarters</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-hands-helping"></i> Residential</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-hands-helping"></i> Initiate Quarters</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-hands-helping"></i> Common Grounds</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="nav-item nav-dropdown">--}}
            {{--<a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-leaf"></i> Amity</a>--}}
            {{--<ul class="nav-dropdown-items">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-leaf"></i> Headquarters</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-leaf"></i> Residential</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-leaf"></i> Initiate Quarters</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-leaf"></i> Common Grounds</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="nav-item nav-dropdown">--}}
            {{--<a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-balance-scale"></i> Candor</a>--}}
            {{--<ul class="nav-dropdown-items">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-balance-scale"></i> Headquarters</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-balance-scale"></i> Residential</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-balance-scale"></i> Initiate Quarters</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-balance-scale"></i> Common Grounds</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="nav-item nav-dropdown">--}}
            {{--<a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-fire"></i> Dauntless</a>--}}
            {{--<ul class="nav-dropdown-items">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-fire"></i> Main</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-fire"></i> Residential</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-fire"></i> Initiate Quarters</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-fire"></i> Common Grounds</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="nav-item nav-dropdown">--}}
            {{--<a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-eye"></i> Erudite</a>--}}
            {{--<ul class="nav-dropdown-items">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-eye"></i> Headquarters</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-eye"></i> Residential</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-eye"></i> Initiate Quarters</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-eye"></i> Common Grounds</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="nav-item nav-dropdown">--}}
            {{--<a class="nav-link nav-dropdown-toggle" href="#"><i class="fas fa-fist-raised"></i> Factionless Alexandria</a>--}}
            {{--<ul class="nav-dropdown-items">--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-fist-raised"></i> Fighting Pits</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-fist-raised"></i> Residential</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#"><i class="fas fa-fist-raised"></i> Common Grounds</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

    </ul>
</nav>