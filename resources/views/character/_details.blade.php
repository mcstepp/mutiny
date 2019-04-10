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
            History, personality, appearance, face claim
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
                    <label for="appearance" class="control-label">Appearance:</label>

                    <textarea class="form-control form-control-lg" rows="5" name="appearance" id="appearance">{{ old('appearance', $character->appearance) }}</textarea>
            </div>

            <div class="form-group">
                    <label for="faceclaim" class="control-label align-self-center">Face Claim (Optional):</label>

                    <input type="text" class="form-control form-control-lg" name="faceclaim" id="faceclaim" value="{{ old('faceclaim', $character->faceclaim) }}">
                </div>

        </div>
    </div>
</div>
