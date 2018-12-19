<li class="nav-item dropdown d-md-down-none">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-bell"></i>
        <span class="badge badge-pill badge-primary">{{ $notifications->count() }}</span>
    </a>
    <unread-notifications :notifications="{{ json_encode($notifications) }}"></unread-notifications>
</li>

