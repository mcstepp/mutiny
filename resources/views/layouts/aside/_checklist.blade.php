<div class="tab-pane active" id="checklist" role="tabpanel">
    <div class="callout callout-secondary m-0 py-2 text-center text-white bg-danger text-uppercase">
        <span class="m-fancy-title text-uppercase h6">Tasks</span>
    </div>
    <hr class="transparent mx-3 my-0">
    @include('layouts.aside._checklist_item', [
    'id' => 1,
    'task_category' => 'occupational'
    ])
    <hr class="mx-3 my-0">
    @include('layouts.aside._checklist_item', [
    'id' => 2,
    'task_category' => 'casual'
    ])
    <hr class="transparent mx-3 my-0">
    @include('layouts.aside._checklist_item', [
    'id' => 3,
    'task_category' => 'lifestyle'
    ])
    <hr class="transparent mx-3 my-0">
    @include('layouts.aside._checklist_item', [
    'id' => 4,
    'task_category' => 'minor'
    ])
    <hr class="mx-3 my-0">
    @include('layouts.aside._checklist_item', [
    'id' => 5,
    'task_category' => 'major'
    ])
    <hr class="mx-3 my-0">
    @include('layouts.aside._checklist_item', [
    'id' => 6,
    'task_category' => 'occupational'
    ])
    <hr class="mx-3 my-0">
</div>