<div class="container-fluid my-3">
    <div class="card m-card bg-industrial-">
        <h2 class="card-top m-fancy-title text-uppercase text-center">All Bonus Modes</h2>
        <hr class="glow-default mt-0">

        <div class="card-body container-fluid">
            <ol>
                @foreach($bonusModes as $bonus)
                    <li>
                        <span class="m-fancy-title text-uppercase">{{ $bonus->name }}</span> : {{ $bonus->description }}
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>