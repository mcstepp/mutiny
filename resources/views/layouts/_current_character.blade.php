<img src="https://78.media.tumblr.com/28d98474a845d2fa0687015dd7623d79/tumblr_pa97isisBF1rp7llco3_r1_400.gif" class="img-avatar img-thumbnail" alt="Avatar">
<div class="m-fancy-title text-uppercase">
    <strong>{{ $user->current_character()->username }}</strong>
</div>
<hr class="neon-default">
<div class="text-{{ strtolower($user->current_character()->faction->name) }}">
    <span>{{ $user->current_character()->faction->name }}</span><br>
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
        <div class="col">
            <switch-character :characters="{{ json_encode($user->characters) }}"></switch-character>
        </div>
    </div>
</div>