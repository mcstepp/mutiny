<div class="miniprofile card m-card bg-industrial-dark col-12">
    <div class="card-body container-fluid">
        <div class="row">


            <div class="col-md-9 col-lg-10 align-self-center">
                <div class="container-fluid p-0">
                    <div class="m-traits text-md-right text-sm-center align-self-center">
                        <i class="fas fa-{{ $author->faction->icon }} text-{{ strtolower($author->faction->name) }}"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="callout callout-{{ strtolower($author->faction->name) }} m-trait m-fancy-title">
                           {{ $author->faction->name }}
                        </span>
                        <span class="callout callout-{{ strtolower($author->faction->name) }} m-trait m-fancy-title">D-4</span>
                        <span class="callout callout-{{ strtolower($author->faction->name) }} m-trait m-fancy-title">{{ $author->occupation }}</span>
                        <span class="callout callout-{{ strtolower($author->faction->name) }} m-trait m-fancy-title">Class of {{ $author->initiation_year }}</span>
                        <i class="fas fa-{{ $author->faction->icon }} text-{{ strtolower($author->faction->name) }}"></i>
                    </div>

                    <hr class="glow-default">

                    <div class="m-author-meta text-md-right text-sm-center">
                        <h3 class="m-fancy-header m-author"><a class="flicker neon-default" href="{{ $author->path() }}">{{$author->username() }}</a></h3>
                        <span class="m-fancy-title">{{ $author->age }} years old</span>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-lg-2 text-center">
                <img src="http://placehold.it/150" class="img-avatar text-center">
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
                    {{--<div class="m-traits text-md-right text-sm-center align-self-center">--}}
                        {{--<span class="callout callout-secondary m-trait m-fancy-title">Dauntless</span>--}}
                        {{--<span class="callout callout-info m-trait m-fancy-title">D-4</span>--}}
                        {{--<span class="callout callout-primary m-trait m-fancy-title">Commander of the City Patrol</span>--}}
                        {{--<span class="callout callout-primary m-trait m-fancy-title">Class of 141</span>--}}
                    {{--</div>--}}

                    {{--<hr class="glow-default">--}}

                    {{--<div class="m-author-meta text-md-right text-sm-center">--}}
                        {{--<h3 class="neon-default m-fancy-header m-author">{{$author->username}}</h3>--}}

                        {{--<h3 class="neon-default m-fancy-header m-author">Bree Duncan</h3>--}}
                        {{--<span class="m-fancy-title">27 years old</span>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
