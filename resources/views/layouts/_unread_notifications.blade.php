<li class="nav-item dropdown d-md-down-none">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-bell"></i><span class="badge badge-pill badge-primary">{{ $notifications->count() }}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg m-userbar-notifications">
        <div class="dropdown-header text-center">
            <strong>You have {{ $notifications->count() }} unread notifications.</strong>
        </div>
        <a href="#" class="dropdown-item">
            <div class="container-fluid m-0">
                <div class="row">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-comments text-info"></i>
                    </div>
                    <div class="col-10">
                        Bree Duncan replied to "The Ultimate Test."
                    </div>
                </div>

            </div>
        </a>
        <a href="#" class="dropdown-item">
            <div class="container-fluid m-0">
                <div class="row">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-check text-success"></i>
                    </div>
                    <div class="col-10">
                        Your character application has been approved.
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="dropdown-item">
            <div class="container-fluid m-0">
                <div class="row">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-times text-danger"></i>
                    </div>
                    <div class="col-10">
                        Your character application has been pended.
                    </div>
                </div>
            </div>
        </a>

        <a href="#" class="dropdown-item text-center">
            <strong>View all notifications</strong>
        </a>
        <a href="#" class="dropdown-item text-center">
            <strong>Clear all notifications</strong>
        </a>
    </div>
</li>

