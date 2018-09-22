<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MUTINY!') }}</title>

    <!-- Icons -->
    <link href="{{ mix('css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

    <!-- Main Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- Required -->
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">

</head>
<body class="mutiny app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <div id="app">
        @include('layouts.userbar')

        <div class="app-body">
            @include('layouts.sidebar')
            <div class="m-wrapper container-fluid">
                <div class="m-header"></div>
                <main class="main">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @hassection('captcha')
        @yield('captcha')
    @endif
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js"></script>
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
