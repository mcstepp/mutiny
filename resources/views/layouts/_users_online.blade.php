<li class="nav-item dropdown d-md-down-none">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-street-view"></i>
        <span class="badge badge-pill badge-primary">{{ auth()->user()->allOnline()->count() }}</span>
    </a>
</li>