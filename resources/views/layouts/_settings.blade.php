<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <div class="media">
            @if(Auth::user()->graphics && Auth::user()->graphics->icon_url)
                <img src="{{ Auth::user()->graphics->icon_url }}" class="img-avatar img-thumbnail" width="35" height="35" alt="Icon">
            @else
                <img src="https://via.placeholder.com/35" class="img-thumbnail img-avatar" width="35" height="35"  alt="Icon">
            @endif
            <div class="media-body m-1">
                <strong class="align-middle"> {{ Auth::user()->username }}</strong>
            </div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header text-center">
            <strong>{{ Auth::user()->alias }}</strong>
        </div>
        <a class="dropdown-item" href="#"><i class="far fa-bell"></i> Notifications <span class="badge badge-primary">{{ $notifications_count }}</span></a>
        <a class="dropdown-item" href="#"><i class="far fa-envelope"></i> Messages <span class="badge badge-primary">42</span></a>
        <div class="dropdown-header text-center">
            <strong>Settings</strong>
        </div>
        <a class="dropdown-item" href="{{ route('user-profile', Auth::user()) }}"><i class="fas fa-user"></i> Profile</a>
        <a class="dropdown-item" href="{{ route('edit-user', Auth::user()) }}"><i class="fas fa-user-cog"></i> Preferences</a>
        <a class="dropdown-item" href="#"><i class="fas fa-flip-horizontal fa-reply"></i> Subscriptions <span class="badge badge-primary">{{ $subscriptions_count }}</span></a>

        @if(auth()->user()->isAdmin())
            <div class="dropdown-header text-center">
                <strong>Staff</strong>
            </div>
            <a class="dropdown-item" href="/admin"><i class="fas fa-user-shield"></i> Admin Panel</a>
        @endif

        <div class="dropdown-header text-center">
            <strong>Account</strong>
        </div>
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
            <i class="fa fa-lock"></i> Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</li>