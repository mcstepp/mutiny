<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-6 order-2 order-md-first">
            <hr class="glow-default d-flex">
        </div>
        <div class="col-md-6 order-1 order-md-last">
            <h2 class="m-fancy-header neon-default text-uppercase text-center">
            The Basics
            </h2>
        </div>
    </div>
</div>

<div class="col-xl-4">
    <div class="card m-card bg-industrial-dark">
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
</div>

<div class="col-xl-8">
    <div class="card m-card">
        <div class="card-body">
            <div class="form-group mb-5">
                    <label for="first_name" class="control-label">First Name:</label>

                    <input type="text"
                           class="form-control form-control-lg"
                           name="first_name"
                           id="first_name"
                           value="{{ old('first_name', $character->first_name) }}"
                           required>
            </div>

            <div class="form-group mb-5">
                <label for="chosen_name" class="control-label">Chosen Name (Optional):</label>
                <input type="text"
                       class="form-control form-control-lg"
                       name="chosen_name"
                       id="chosen_name"
                       value="{{ old('chosen_name', $character->chosen_name) }}">
            </div>

            <div class="form-group mb-5">
                <label for="last_name" class="control-label">Last Name:</label>
                <input type="text"
                       class="form-control form-control-lg"
                       name="last_name"
                       id="last_name"
                       value="{{ old('last_name', $character->last_name) }}"
                       required>
            </div>

            <faction-container :factions="{{ json_encode($factions) }}"
                               current_faction="{{ old('faction', $character->faction_id) }}"
                               origin_faction="{{ old('origin_faction', $character->origin_faction_id) }}"
            ></faction-container>

        </div>
    </div>
</div>
