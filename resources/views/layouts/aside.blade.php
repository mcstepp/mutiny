<aside class="aside-menu m-checklist-aside">
    <ul class="nav nav-tabs bg-dark" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#checklist" role="tab"><i class="fas fa-tasks"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#timeline" role="tab"><i class="fas fa-calendar-check"></i></a>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        @include('layouts.aside._checklist')
        @include('layouts.aside._timeline')
    </div>
</aside>
