<div class="card m-card bg-industrial-dark">
    <div class="card-top">
        <h3 class="m-fancy-title uppercase text-center">
            The Details
        </h3>
        <hr class="glow-default">
    </div>
    <div class="card-body">
        History, personality, appearance, face claim
    </div>
</div>

<div class="card m-card">
    <div class="card-body">

        <div class="form-group row">
            <div class="col-md-2 d-flex">
                <label for="occupation" class="control-label align-self-center">Occupation:</label>
            </div>

            <div class="col-md-10">
                <occupation-claims></occupation-claims>
                {{--<input type="text" class="form-control" name="occupation" id="occupation" value="{{ old('occupation', $character->occupation) }}">--}}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2">
                <label for="history" class="control-label">Back Story:</label>
            </div>

            <div class="col-md-10">
                <textarea class="form-control" rows="3" name="history" id="history">{{ old('history',$character->history) }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label for="personality" class="control-label">Personality:</label>
            </div>

            <div class="col-md-10">
                <textarea class="form-control" rows="3" name="personality" id="personality">{{ old('personality', $character->personality) }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label for="appearance" class="control-label">Appearance:</label>
            </div>

            <div class="col-md-10">
                <textarea class="form-control" rows="3" name="appearance" id="appearance">{{ old('appearance', $character->appearance) }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2 d-flex">
                <label for="faceclaim" class="control-label align-self-center">Face Claim (Optional):</label>
            </div>

            <div class="col-md-10">
                <input type="text" class="form-control" name="faceclaim" id="faceclaim" value="{{ old('faceclaim', $character->faceclaim) }}">
            </div>
        </div>

    </div>
</div>