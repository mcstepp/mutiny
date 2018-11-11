<div class="miniprofile card m-card bg-industrial-dark col-12">
    <div class="card-body container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 text-center">
                <img src="http://placehold.it/150" class="img-avatar text-center">
            </div>

            <div class="col-md-9 col-lg-10 align-self-center">
                <div class="container-fluid p-0">
                    <div class="m-traits text-md-left text-sm-center align-self-center">
                        <span class="callout callout-secondary m-trait m-fancy-title">Admin</span>
                        <span class="callout callout-info m-trait m-fancy-title">Global Moderator</span>
                        <span class="callout callout-primary m-trait m-fancy-title">Member</span>
                        <span class="callout callout-primary m-trait m-fancy-title">{{ $author->posts_count }} {{  }}</span>
                    </div>

                    <hr class="glow-default">

                    <div class="m-author-meta text-md-left text-sm-center">
                        <h3 class="m-fancy-header m-author"><a class="flicker neon-default" href="{{ $author->path() }}">{{$author->username}}</a></h3>
                        <span class="m-fancy-title">Online</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{--<div class="miniprofile card m-card bg-mutinydark col-12">--}}
    {{--<div class="card-body container-fluid">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-3 col-lg-2 text-center">--}}
                {{--<img src="http://placehold.it/150" class="img-avatar text-center">--}}
            {{--</div>--}}

            {{--<div class="col-md-9 col-lg-10 align-self-center">--}}
                {{--<div class="container-fluid p-0">--}}
                    {{--<div class="m-traits text-md-left text-sm-center align-self-center">--}}
                        {{--<span class="callout callout-secondary m-trait m-fancy-title">Dauntless</span>--}}
                        {{--<span class="callout callout-info m-trait m-fancy-title">D-4</span>--}}
                        {{--<span class="callout callout-primary m-trait m-fancy-title">Commander of the City Patrol</span>--}}
                        {{--<span class="callout callout-primary m-trait m-fancy-title">Class of 141</span>--}}
                    {{--</div>--}}

                    {{--<hr class="glow-default">--}}

                    {{--<div class="m-author-meta text-md-left text-sm-center">--}}
                        {{--<h3 class="neon-default m-fancy-header m-author">{{$author->username}}</h3>--}}

                        {{--<h3 class="neon-default m-fancy-header m-author">Bree Duncan</h3>--}}
                        {{--<span class="m-fancy-title">27 years old</span>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}