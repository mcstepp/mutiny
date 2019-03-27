<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MUTINY!') }}</title>

    <!-- Main Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Required -->
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">

</head>

@auth
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
@endauth
@guest
<body class="app header-fixed sidebar-hidden aside-menu-hidden">
@endguest
<div id="app">
@include('layouts.userbar')
<div class="app-body">

    @auth
    @include('layouts.sidebar')
    @endauth

    <!-- Main content -->
    <main class="main">

        <!-- Page Header -->
        <div class="mutiny-page-header">

            <div class="m-jumbotron jumbotron jumbotron-fluid">

            </div>

            {{--<div class="container-fluid">--}}
                {{--@include('layouts.alerts')--}}
            {{--</div>--}}
        </div>

        @yield('content')


    </main>

    {{--@include('layouts.aside')--}}
</div>
<footer class="app-footer">
    <p class="text-muted text-center font-xs m-auto">
        MUTINY! Copyright © 2018 M.S. All rights reserved.<br>
        MUTINY! is an independent fan website. Images, content, Divergent © Veronica Roth, and/or their respective owners. User content on this website is credited to the individuals.
        <a href='http://dryicons.com/icon/fist-icon-13099'> Icon by Dryicons </a>
    </p>
</footer>
</div>


<!-- Scripts -->
@hassection('captcha')
    @yield('captcha')
@endif

<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{ mix('/js/vendor.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>


</body>
</html>