<li class="nav-item dropdown d-md-down-none">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        @if($notifications->count())
        <i class="far fa-bell neon-default"></i>
        @else
        <i class="far fa-bell"></i>
        @endif
        <span class="badge badge-pill badge-primary">{{ $notifications->count() }}</span>
    </a>
    <unread-notifications :notifications="{{ json_encode($notifications) }}"></unread-notifications>
</li>

