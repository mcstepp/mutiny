@include('graphics._icon', [
                    'author' => $user->current_character(),
                    'type' => strtolower(class_basename($user->current_character())) ])
<div class="m-fancy-title text-uppercase">
    <strong>{{ $user->current_character()->username }}</strong>
</div>
<hr class="neon-default">
<div class="text-{{ strtolower($user->current_character()->faction->name) }} m-fancy-title text-uppercase">
    <span><i class="fas fa-{{ $user->current_character()->faction->icon }}"></i> {{ $user->current_character()->faction->name }}</span><br>
    <span>{{ $user->current_character()->occupation }}</span>
</div>
<div class="container-fluid px-4 pt-4 m-sidebar-character">
    <div class="row">
        <div class="col">
            <a href="#" title="Edit Character" class="flicker">
                <i class="fas fa-user-edit"></i>
            </a></div>
        <div class="col">
            <a href="#" title="Character Inventory" class="flicker">
                <i class="fas fa-box-open"></i>
            </a></div>
        @if(count($user->characters) >= 2)
        <div class="col">
            <switch-character :characters="{{ json_encode($user->characters) }}"></switch-character>
        </div>
        @endif
    </div>
</div>