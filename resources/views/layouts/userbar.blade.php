<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>

    <ul class="nav navbar-nav ml-auto mr-2">

        @if (Auth::guest())
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
        @else

        @include('layouts._users_online')
        @include('layouts._unread_notifications')
        @include('layouts._messages')
        @include('layouts._settings')

        {{--<button class="navbar-toggler aside-menu-toggler" type="button">--}}
            {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}
        @endif

    </ul>
</header>