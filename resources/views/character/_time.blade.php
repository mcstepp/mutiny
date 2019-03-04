<div class="card m-card bg-industrial-dark">
    <div class="card-top">
        <h3 class="m-fancy-title uppercase text-center">
            Timey-Wimey Stuff
        </h3>
        <hr class="glow-default">
    </div>
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

<div class="card m-card">
    <character-time
            :character="{{ json_encode($character) }}"
            :old="{{ json_encode(old()) }}"
            month="June"
            year=150
            co_month="May"
            :years="{{ json_encode($years) }}"
            :ages="{{ json_encode($ages) }}"
            :months="{{ json_encode($months) }}"
            :clazzes="{{ json_encode($clazzes) }}"></character-time>
</div>