<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-6 order-2 order-md-first">
            <hr class="glow-default d-flex">
        </div>
        <div class="col-md-6 order-1 order-md-last">
            <h2 class="m-fancy-header neon-default text-uppercase text-center">
                The Timeline
            </h2>
        </div>
    </div>
</div>

<div class="col-xl-4">
    <div class="card m-card bg-industrial-dark">
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Birth Month | </h4>
            <span>The calendar month your character was born in.</span>
        </div>
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Birth Day | </h4>
            <span>The calendar day your character was born on.
                        </span>
        </div>
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Birth Year | </h4>
            <span>
                The <a href="#LinkToPostCollapseWiki">post-collapse</a> year your character was born in.
            </span>
        </div>
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Age | </h4>
            <span>Your character's age. Characters must be 18 years old on May 31 in order to become initiates.</span>
        </div>
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Initiation Year | </h4>
            <span>This is the post-collapse year your character started the initiation process into their faction.</span>
        </div>
    </div>
</div>


<div class="col-xl-8">
    <div class="card m-card">
        {{--<character-time--}}
                {{--:character="{{ json_encode($character) }}"--}}
                {{--:old="{{ json_encode(old()) }}"--}}
                {{--month="June"--}}
                {{--year=150--}}
                {{--co_month="May"--}}
                {{--:years="{{ json_encode($years) }}"--}}
                {{--:ages="{{ json_encode($ages) }}"--}}
                {{--:months="{{ json_encode($months) }}"--}}
                {{--:clazzes="{{ json_encode($clazzes) }}"></character-time>--}}

        <character-time
                :character="{{ json_encode($character) }}"
                :old="{{ json_encode(old()) }}"
                :period="{{ json_encode($period) }}"
                :current="{{ json_encode($current) }}"
                :asof="{{ json_encode($asOf) }}"
                :years="{{ json_encode($years) }}"
                :ages="{{ json_encode($ages) }}"
                :months="{{ json_encode($months) }}"
                :clazzes="{{ json_encode($clazzes) }}">

        </character-time>
    </div>
</div>
