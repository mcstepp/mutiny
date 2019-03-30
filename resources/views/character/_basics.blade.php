<div class="card m-card bg-industrial-dark">
    <div class="card-top">
        <h3 class="m-fancy-title uppercase text-center">
            The Basics
        </h3>
        <hr class="glow-default">
    </div>
    <div class="card-body">
        <h4 class="text-uppercase m-fancy-title d-inline-block">First Name | </h4>
        <span>
                            Your character's given name at birth. Your character might go by a nickname, or a shortened version of their name, or may have even given themselves a new name at initiation. There's a different section for that after this field. What is the first name on the birth certificate of your character?
                        </span>
    </div>

    <div class="card-body">
        <h4 class="text-uppercase m-fancy-title d-inline-block">Chosen Name | </h4>
        <span>
                            Does your character have a nickname that they prefer to go by or a shortened version of their name, or a name they chose for themselves at initiation? This will show as your username for this character within in-character threads.
                        </span>
    </div>

    <div class="card-body">
        <h4 class="text-uppercase m-fancy-title d-inline-block">Last Name | </h4>
        <span>
                            This is your family name, last name, or surname. Even factionless people have last name, though they may be made up if they were born factionless or orphaned.
                        </span>
    </div>

    <div class="card-body">
        <h4 class="text-uppercase m-fancy-title d-inline-block">Faction of Origin | </h4>
        <span>
                            This is your faction pre-Choosing. What faction was your character born into? If your character was an orphan, Abnegation is their faction of origin (their pre-Choosing faction). If your character was an adopted orphan, this would be the faction they were adopted into. Factionless origins are only allowed if your current faction is also factionless (born factionless, never Chose).
                        </span>
    </div>

    <div class="card-body">
        <h4 class="text-uppercase m-fancy-title d-inline-block">Current Faction | </h4>
        <span>
                            This is the faction that your character Chose at their Choosing Ceremony, or factionless. If they didn't pass initiation, their current faction is factionless because there is no second changes at initiation.
                        </span>
    </div>

</div>

<div class="card m-card">
    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-2">
                <label for="first_name" class="control-label">First Name:</label>
            </div>

            <div class="col-md-10 d-flex">
                <input type="text"
                       class="form-control align-self-center"
                       name="first_name"
                       id="first_name"
                       value="{{ old('first_name', $character->first_name) }}"
                       required>
            </div>
        </div>
        <div class="form-group row">
            <label for="chosen_name" class="control-label col-md-2">Chosen Name (Optional):</label>
            <div class="col-md-10">
                <input type="text"
                       class="form-control"
                       name="chosen_name"
                       id="chosen_name"
                       value="{{ old('chosen_name', $character->chosen_name) }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="control-label col-md-2">Last Name:</label>
            <div class="col-md-10">
                <input type="text"
                       class="form-control"
                       name="last_name"
                       id="last_name"
                       value="{{ old('last_name', $character->last_name) }}"
                       required>
            </div>
        </div>

        <faction-container :factions="{{ json_encode($factions) }}"
            current_faction="{{ old('faction', $character->faction_id) }}"
            origin_faction="{{ old('origin_faction', $character->origin_faction_id) }}"
        ></faction-container>

    </div>
</div>