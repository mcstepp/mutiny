@extends('layouts.main')

@section('content')
<div class="container-fluid my-3">
    <div class="row">
        <h1 class="m-fancy-header neon-default m-auto pb-5">Are you ready for a MUTINY!?</h1>
    </div>

    <div class="row ">
        <div class="col d-flex">

            {{--<div class="card m-card m-text-shadow bg-industrial-gray-700">--}}
                {{--<div class="card-body p-3 clearfix">--}}
                    {{--<i class="fas fa-trophy bg-gray-700 p-3 font-2xl mr-3 float-left"></i>--}}
                    {{--<div class="text-uppercase font-xs m-fancy-header">State of the Art</div>--}}
                {{--</div>--}}
                {{--<div class="card-footer bg-gray-700 px-3 py-2">--}}
                    {{--<a class="text-white m-fancy-title text-uppercase font-xs btn-block flicker" href="#">Redeem Points <i class="text-white fa fa-angle-right float-right font-lg"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="card m-card bg-industrial-gray-700 align-self-stretch">
                <div class="card-top text-center">
                    <i class="fas fa-certificate bg-gray-700 p-3 font-2xl mr-3 float-left neon-default glow-default"></i>
                    <h2 class="text-uppercase m-fancy-header m-3 neon-default">State of the Art</h2>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Fully customized framework on a private hosted server</li>
                        <li>Unique features not found anywhere else</li>
                        <li>Intuitive and easy-to-use interface</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col d-flex">
            <div class="card m-card bg-industrial-gray-700 align-self-stretch">
                <div class="card-top text-center">
                    <i class="fas fa-users bg-gray-700 p-3 font-2xl mr-3 float-left neon-default glow-default"></i>
                    <h2 class="text-uppercase m-fancy-header m-3 neon-default">Collaborative</h2>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Register as a player, create many characters</li>
                        <li>Individual development and subplots</li>
                        <li>Discord Available</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col d-flex">
            <div class="card m-card bg-industrial-gray-700 align-self-stretch">
                <div class="card-top text-center">
                    <i class="fas fa-book-reader bg-gray-700 p-3 font-2xl mr-3 float-left neon-default glow-default"></i>
                    <h2 class="m-fancy-header text-uppercase m-3 neon-default">
                         Immersive Storytelling
                    </h2>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Complete tasks to advance through faction initiation</li>
                        <li>Earn points to canonize your story within the MUTINY! universe and more</li>
                        <li>Use, collect, and trade items with an expansive inventory and commissary</li>
                        <li>Immortalize your character in history</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col pb-4">
            @include("widgets._announcements")
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 d-flex">
            <div class="card m-card bg-industrial align-self-stretch">
                <div class="card-top text-center">
                    <h2 class="m-fancy-header neon-default">
                        About MUTINY!
                    </h2>
                </div>
                <div class="card-body">
                    <p>It's been around 150 years since the last great war and the inevitable collapse of society and modern society.
                        The survivors of the global catastrophe protected what was left of humanity within a walled city. Determined to eradicate the evils that fueled the Collapse, the survivors formed factions. Each faction, represented by different values and traits, was responsible for a different aspect of society afforded to all denizens of the city.</p>

                    <p>One of the key tenants of the society was Freedom of Choice. Freedom to choose your faction. Freedom to choose your religion, your lovers, your lifestyle, your job, to live life your way as long as it didn't infringe on the rights and choices of others. Freedom of choice did not mean freedom from consequences of your decision. Failure to complete your chosen faction's initiation resulted in factionless. Serious crimes warranted exile from your faction. Some people even chose to be factionless.</p>

                    <p>As the new society progresses, new conflicts and issues arose. One major issues of recent times has been factionless rights. Failing initiation into a chosen faction, choosing to commit serious crimes, and choosing to give up the benefits of society weren't the only ways to become faction. What about those <i>born into factionless?</i> They didn't choose to be born outside of society but within the walls that trapped them. With differing politics even within factions, a growing anti-faction sentiment brewing, and new discoveries about their history, the people of the city are in the midst of another revolution as they question everything they thought they knew.</p>

                    <p><b><i>Are you ready for a mutiny?</i></b></p>
                </div>
            </div>
        </div>
        <div class="col sm-6 d-flex">
            <div class="card m-card bg-industrial align-self-stretch">
                <div class="card-top text-center">
                    <h2 class="m-fancy-header neon-default">
                        About MUTINY! 2.0
                    </h2>
                </div>
                <div class="card-body">
                    <p>First created on Jcink, MUTINY! outgrew the popular RP forum framework in less than a year. After two years of feature planning and development, MUTINY! was reborn as a self-coded, fully scripted community on a private server. Players on MUTINY! 2.0 are personally invited to the site via invitation code. Advertising is limited to mostly word of mouth with minimal advertising to affiliated sites only.</p>
                    <p>MUTINY! is an original post-apocalyptic RP inspired by the Divergent series by Veronica Roth. </p>
                    <p class="text-center">
                        <b>Want an invitation to MUTINY!?</b></p>
                    <p>Find us on:</p>
                        <ul>
                            <li>CTTW (<a href="https://cttw.jcink.net/index.php?showuser=354" target="_blank">Disco</a>, <a href="https://cttw.jcink.net/index.php?showuser=6062" target="_blank">Miami</a>)</li>
                            <li>Shadowplay (<a href="https://shadowplayers.jcink.net/index.php?showuser=3615" target="_blank">Disco</a>)</li>
                        </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--@if (session('status'))--}}
{{--<div class="alert alert-success">--}}
{{--{{ session('status') }}--}}
{{--</div>--}}
{{--@endif--}}