<div class="col-xl-4">
    <div class="card m-card bg-industrial-dark">
        <div class="card-body">
            Occupation
        </div>
    </div>
</div>

<div class="col-xl-8">
    <div class="card m-card">
        <div class="card-body">

            <div class="form-group">
                <label for="occupation" class="control-label m-fancy-title text-uppercase">Occupation:</label>

                <occupation-claims :current="{{ json_encode([
                                                    'job' => $character->job ?: null,
                                                    'other' => $character->job_other
                                                ]) }}"
                                    :old="{{ json_encode(old()) }}"
                ></occupation-claims>

            </div>
        </div>
    </div>
</div>