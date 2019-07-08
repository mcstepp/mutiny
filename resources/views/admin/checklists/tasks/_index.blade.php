<div class="container-fluid my-3">
    <div class="card m-card bg-industrial-">
        <h2 class="card-top m-fancy-title text-uppercase text-center">All Tasks</h2>
        <hr class="glow-default mt-0">

        <div class="card-body container-fluid">
            <ol>
                @foreach($tasks as $task)
                    <li>
                        <span class="m-fancy-title text-uppercase">{{ $task->task_category->name }} ({{ $task->points }} points)</span> : {{ $task->description }}
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>