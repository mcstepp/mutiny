<div class="col-xl-4">
    <div class="card m-card bg-industrial-dark">
        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Industry | </h4>
            <span>The specific category of jobs that your character works. Every faction specializes in a specific set of industries. If your character is an Initiate, their industry is Initiation.</span>
        </div>

        <div class="card-body">
            <h4 class="text-uppercase m-fancy-title d-inline-block">Job | </h4>
            <span>The specific role your character has within their industry. Initiate is considered a job.</span>
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