<div class="card m-card m-task rounded m-text-shadow bg-industrial-primary m-3" style="width: 85%;">
    <div class="card-body clearfix">
        <h6 class="m-fancy-title text-uppercase neon-default">
            Task Category
        </h6>
        <div class="tab-content border-0 text-white h-auto bg-transparent">
            <div class="tab-pane p-1 active" id="task-summary-{{ $id }}" role="tabpanel">
                <p class="small">Aenean sit amet aliquet risus. Curabitur vel auctor ipsum. Vestibulum at accumsan ligula, et accumsan diam. Aliquam id est sit amet ligula molestie pellentesque. Ut dignissim, odio et mattis maximus, dui dui convallis odio, vel aliquam lectus dolor vitae velit.</p>
            </div>
            <div class="tab-pane p-1" id="bonus-{{ $id }}" role="tabpanel">
                <ol class="p-3">
                    <li>bonus 1</li>
                    <li>bonus 2</li>
                    <li>bonus 3</li>
                    <li>bonus 4</li>
                    <li>bonus 5</li>
                </ol>
            </div>
            <div class="tab-pane p-1" id="url-{{ $id }}" role="tabpanel">
                url
            </div>
        </div>

        <footer class="bg-primary">
            <ul class="nav border-0 justify-content-around nav-fill" role="tablist">
                <li class="nav-item text-center">
                    <a class="nav-link text-white active" data-toggle="tab" href="#task-summary-{{ $id }}" role="tab"><i class="fas fa-comment-alt"></i></a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link text-white" data-toggle="tab" href="#bonus-{{ $id }}" role="tab"><i class="fas fa-list"></i><small class="p-1">1/5</small></a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link text-white" data-toggle="tab" href="#url-{{ $id }}" role="tab"><i class="fas fa-link"></i></a>
                </li>
            </ul>
        </footer>

    </div>
</div>