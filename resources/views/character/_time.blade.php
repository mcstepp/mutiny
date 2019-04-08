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
            <span>
                            Your character's given name at birth. Your character might go by a nickname, or a shortened version of their name, or may have even given themselves a new name at initiation. There's a different section for that after this field. What is the first name on the birth certificate of your character?
                        </span>
        </div>
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Birth Day | </h4>
            <span>
                            Your character's given name at birth. Your character might go by a nickname, or a shortened version of their name, or may have even given themselves a new name at initiation. There's a different section for that after this field. What is the first name on the birth certificate of your character?
                        </span>
        </div>
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Birth Year | </h4>
            <span>
                            Your character's given name at birth. Your character might go by a nickname, or a shortened version of their name, or may have even given themselves a new name at initiation. There's a different section for that after this field. What is the first name on the birth certificate of your character?
                        </span>
        </div>
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Age | </h4>
            <span>
                            Your character's given name at birth. Your character might go by a nickname, or a shortened version of their name, or may have even given themselves a new name at initiation. There's a different section for that after this field. What is the first name on the birth certificate of your character?
                        </span>
        </div>
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Initiation Year | </h4>
            <span>
                            Your character's given name at birth. Your character might go by a nickname, or a shortened version of their name, or may have even given themselves a new name at initiation. There's a different section for that after this field. What is the first name on the birth certificate of your character?
                        </span>
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
