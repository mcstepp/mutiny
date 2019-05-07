<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-md-6 order-2 order-md-first">
            <hr class="glow-default d-flex">
        </div>
        <div class="col-md-6 order-1 order-md-last">
            <h2 class="m-fancy-header neon-default text-uppercase text-center">
                The Details
            </h2>
        </div>
    </div>
</div>

<div class="col-xl-4">
    <div class="card m-card bg-industrial-dark">
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Back story | </h4>
            <span>
                Share some of your character's history and back story. If they are factionless, how did they become factionless? Initiates, feel free to talk about your life before <a href="#linkToChoosingWiki" target="_blank">Choosing</a>. Adults can talk about what they did before Choosing, their <a href="#linkToInitiationWiki">initiation</a> experience, and life since initiating in their factions.
            </span>
        </div>

        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Personality | </h4>
            <span> Here's the chance to talk your character's <a href="#linkToAptitudeTestWiki">aptitudes</a>. Nearly everyone is <a href="#linkToDivergentWiki">Divergent</a> and single-faction aptitudes are uncommon, but it is not rare. Specific aptitude test results are confidential to the discretion of the character. What faction aptitudes and specific traits (values and flaws) does your character have?</span>
        </div>

        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Appearance | </h4>
            <span>Describe your character's general appearance. What <a href="#linkToFashionWiki">style</a> do they have? What inspires their wardrobe? Do they shop around different commissaries or do they stick to their own faction's selection? Generally, each faction has a particular style that is available in their <a href="#linkToCommissaryWiki">commissaries</a>. The factiolnless may adopt whatever style from any faction or combine them as well, including the unique <a href="#linkToUndergroundStyleWiki">Underground style</a> only available on the <a href="#linkToUndergroundMarketWiki">Underground market</a>.</span>
        </div>

        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Face claim | </h4>
            <span>If you prefer to have a face claim, please only use "real-life" faces like celebrities (including models, musicians, actors) who have not explicitly asked to not be used and are 18+. There is no age range rule as far as real age to character age, but please use appropriate graphics and use common sense. Refer to the <a href="/faceclaims" target="_blank">Face Claims list</a> for claimed faces. </span>
        </div>

    </div>
</div>

<div class="col-xl-8">
    <div class="card m-card">
        <div class="card-body">

            <div class="form-group">
                    <label for="history" class="control-label m-fancy-title text-uppercase">Back Story:</label>

                    <textarea class="form-control form-control-lg" rows="5" name="history" id="history">{{ old('history',$character->history) }}</textarea>
            </div>

            <div class="form-group">
                    <label for="personality" class="control-label m-fancy-title text-uppercase">Personality:</label>

                    <textarea class="form-control form-control-lg" rows="5" name="personality" id="personality">{{ old('personality', $character->personality) }}</textarea>
            </div>

            <div class="form-group">
                    <label for="appearance" class="control-label m-fancy-title text-uppercase">Appearance:</label>

                    <textarea class="form-control form-control-lg" rows="5" name="appearance" id="appearance">{{ old('appearance', $character->appearance) }}</textarea>
            </div>

            <div class="form-group">
                    <label for="faceclaim" class="control-label m-fancy-title text-uppercase">Face Claim (Optional):</label>

                    <input type="text" class="form-control form-control-lg" name="faceclaim" id="faceclaim" value="{{ old('faceclaim', $character->faceclaim) }}">
                </div>

        </div>
    </div>
</div>
