<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <div class="media">
            <img src="https://78.media.tumblr.com/f6902ba79148622f9b4def52cd340015/tumblr_o9a99nE9fI1udp3vfo1_250.png" width="35" class="img-avatar img-thumbnail" alt="username">
            <div class="media-body m-1">
                <strong class="align-middle"> {{ Auth::user()->username }}</strong>
            </div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header text-center">
            <strong>{{ Auth::user()->alias }}</strong>
        </div>
        <a class="dropdown-item" href="#"><i class="far fa-bell"></i> Notifications <span class="badge badge-primary">42</span></a>
        <a class="dropdown-item" href="#"><i class="far fa-envelope"></i> Messages <span class="badge badge-primary">42</span></a>
        <div class="dropdown-header text-center">
            <strong>Settings</strong>
        </div>
        <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Profile</a>
        <a class="dropdown-item" href="{{ route('edit-user', Auth::user()) }}"><i class="fas fa-user-cog"></i> Preferences</a>
        <a class="dropdown-item" href="#"><i class="fas fa-flip-horizontal fa-reply"></i> Subscriptions<span class="badge badge-primary">42</span></a>

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