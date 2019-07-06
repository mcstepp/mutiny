<div class="container-fluid my-3">
    <div class="card m-card bg-industrial-">
        <h2 class="card-top m-fancy-title text-uppercase text-center">All Task Categories</h2>
        <hr class="glow-default mt-0">

        <div class="card-body container-fluid">
            <ol>
                @foreach($taskCategories as $category)
                <li>
                    <span class="m-fancy-title text-uppercase">{{ $category->name }}</span> : {{ $category->description }}
                </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>