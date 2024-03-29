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

{{--<!-- Icons -->--}}
{{--<link href="vendors/css/flag-icon.min.css" rel="stylesheet">--}}
{{--<link href="vendors/css/font-awesome.min.css" rel="stylesheet">--}}
{{--<link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">--}}

{{--<!-- Main styles for this application -->--}}
{{--<link href="css/style.css" rel="stylesheet">--}}

{{--<!-- Styles required by this views -->--}}
{{--<link href="vendors/css/daterangepicker.min.css" rel="stylesheet">--}}
{{--<link href="vendors/css/gauge.min.css" rel="stylesheet">--}}
{{--<link href="vendors/css/toastr.min.css" rel="stylesheet">--}}

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-hidden aside-menu-hidden brand-minimized">
@include('layouts.userbar')
<div id ="app" class="app-body">
@include('layouts.sidebar')
<!-- Main content -->
    <main class="main">

        <!-- Page Header -->
        <div class="mutiny-page-header">

            <div class="m-jumbotron jumbotron jumbotron-fluid">
                {{--<div class="container">--}}
                {{--<h1 class="display-3">Fluid jumbotron</h1>--}}
                {{--<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>--}}
                {{--</div>--}}
            </div>

            {{--<div class="container-fluid">--}}
            {{--@include('layouts.alerts')--}}
            {{--</div>--}}
        </div>

    @yield('content')

    {{--<div class="container-fluid">--}}

    {{--<div class="animated fadeIn">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-6 col-lg-3">--}}
    {{--<div class="card text-white bg-primary">--}}
    {{--<div class="card-body pb-0">--}}
    {{--<div class="btn-group float-right">--}}
    {{--<button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--<i class="icon-settings"></i>--}}
    {{--</button>--}}
    {{--<div class="dropdown-menu dropdown-menu-right">--}}
    {{--<a class="dropdown-item" href="#">Action</a>--}}
    {{--<a class="dropdown-item" href="#">Another action</a>--}}
    {{--<a class="dropdown-item" href="#">Something else here</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<h4 class="mb-0">9.823</h4>--}}
    {{--<p>Members online</p>--}}
    {{--</div>--}}
    {{--<div class="chart-wrapper px-3" style="height:70px;">--}}
    {{--<canvas id="card-chart1" class="chart" height="70"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}

    {{--<div class="col-sm-6 col-lg-3">--}}
    {{--<div class="card text-white bg-info">--}}
    {{--<div class="card-body pb-0">--}}
    {{--<button type="button" class="btn btn-transparent p-0 float-right">--}}
    {{--<i class="icon-location-pin"></i>--}}
    {{--</button>--}}
    {{--<h4 class="mb-0">9.823</h4>--}}
    {{--<p>Members online</p>--}}
    {{--</div>--}}
    {{--<div class="chart-wrapper px-3" style="height:70px;">--}}
    {{--<canvas id="card-chart2" class="chart" height="70"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}

    {{--<div class="col-sm-6 col-lg-3">--}}
    {{--<div class="card text-white bg-warning">--}}
    {{--<div class="card-body pb-0">--}}
    {{--<div class="btn-group float-right">--}}
    {{--<button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--<i class="icon-settings"></i>--}}
    {{--</button>--}}
    {{--<div class="dropdown-menu dropdown-menu-right">--}}
    {{--<a class="dropdown-item" href="#">Action</a>--}}
    {{--<a class="dropdown-item" href="#">Another action</a>--}}
    {{--<a class="dropdown-item" href="#">Something else here</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<h4 class="mb-0">9.823</h4>--}}
    {{--<p>Members online</p>--}}
    {{--</div>--}}
    {{--<div class="chart-wrapper" style="height:70px;">--}}
    {{--<canvas id="card-chart3" class="chart" height="70"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}

    {{--<div class="col-sm-6 col-lg-3">--}}
    {{--<div class="card text-white bg-danger">--}}
    {{--<div class="card-body pb-0">--}}
    {{--<div class="btn-group float-right">--}}
    {{--<button type="button" class="btn btn-transparent dropdown-toggle p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--<i class="icon-settings"></i>--}}
    {{--</button>--}}
    {{--<div class="dropdown-menu dropdown-menu-right">--}}
    {{--<a class="dropdown-item" href="#">Action</a>--}}
    {{--<a class="dropdown-item" href="#">Another action</a>--}}
    {{--<a class="dropdown-item" href="#">Something else here</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<h4 class="mb-0">9.823</h4>--}}
    {{--<p>Members online</p>--}}
    {{--</div>--}}
    {{--<div class="chart-wrapper px-3" style="height:70px;">--}}
    {{--<canvas id="card-chart4" class="chart" height="70"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--</div>--}}
    {{--<!--/.row-->--}}

    {{--<div class="card m-thread">--}}
    {{--<div class="card-body">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-5">--}}
    {{--<h4 class="card-title mb-0">Traffic</h4>--}}
    {{--<div class="small text-muted">November 2017</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--<div class="col-sm-7 d-none d-md-block">--}}
    {{--<button type="button" class="btn btn-primary float-right"><i class="icon-cloud-download"></i></button>--}}
    {{--<div class="btn-group btn-group-toggle float-right mr-3" data-toggle="buttons">--}}
    {{--<label class="btn btn-outline-secondary">--}}
    {{--<input type="radio" name="options" id="option1" autocomplete="off"> Day--}}
    {{--</label>--}}
    {{--<label class="btn btn-outline-secondary active">--}}
    {{--<input type="radio" name="options" id="option2" autocomplete="off" checked=""> Month--}}
    {{--</label>--}}
    {{--<label class="btn btn-outline-secondary">--}}
    {{--<input type="radio" name="options" id="option3" autocomplete="off"> Year--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--</div>--}}
    {{--<!--/.row-->--}}
    {{--<div class="chart-wrapper" style="height:300px;margin-top:40px;">--}}
    {{--<canvas id="main-chart" class="chart" height="300"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-footer">--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<div class="text-muted">Visits</div>--}}
    {{--<strong>29.703 Users (40%)</strong>--}}
    {{--<div class="progress progress-xs mt-2">--}}
    {{--<div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="hidden-sm-down">--}}
    {{--<div class="text-muted">Unique</div>--}}
    {{--<strong>24.093 Users (20%)</strong>--}}
    {{--<div class="progress progress-xs mt-2">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="text-muted">Pageviews</div>--}}
    {{--<strong>78.706 Views (60%)</strong>--}}
    {{--<div class="progress progress-xs mt-2">--}}
    {{--<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="hidden-sm-down">--}}
    {{--<div class="text-muted">New Users</div>--}}
    {{--<strong>22.123 Users (80%)</strong>--}}
    {{--<div class="progress progress-xs mt-2">--}}
    {{--<div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="hidden-sm-down">--}}
    {{--<div class="text-muted">Bounce Rate</div>--}}
    {{--<strong>40.15%</strong>--}}
    {{--<div class="progress progress-xs mt-2">--}}
    {{--<div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.card-->--}}

    {{--<div class="row">--}}
    {{--<div class="col-sm-6 col-lg-3">--}}
    {{--<div class="social-box facebook">--}}
    {{--<i class="fa fa-facebook"></i>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="social-box-chart-1" height="90"></canvas>--}}
    {{--</div>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>89k</strong>--}}
    {{--<span>friends</span>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>459</strong>--}}
    {{--<span>feeds</span>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<!--/.social-box-->--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}

    {{--<div class="col-sm-6 col-lg-3">--}}
    {{--<div class="social-box twitter">--}}
    {{--<i class="fa fa-twitter"></i>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="social-box-chart-2" height="90"></canvas>--}}
    {{--</div>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>973k</strong>--}}
    {{--<span>followers</span>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>1.792</strong>--}}
    {{--<span>tweets</span>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<!--/.social-box-->--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}

    {{--<div class="col-sm-6 col-lg-3">--}}

    {{--<div class="social-box linkedin">--}}
    {{--<i class="fa fa-linkedin"></i>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="social-box-chart-3" height="90"></canvas>--}}
    {{--</div>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>500+</strong>--}}
    {{--<span>contacts</span>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>292</strong>--}}
    {{--<span>feeds</span>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<!--/.social-box-->--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}

    {{--<div class="col-sm-6 col-lg-3">--}}
    {{--<div class="social-box google-plus">--}}
    {{--<i class="fa fa-google-plus"></i>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="social-box-chart-4" height="90"></canvas>--}}
    {{--</div>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<strong>894</strong>--}}
    {{--<span>followers</span>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<strong>92</strong>--}}
    {{--<span>circles</span>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<!--/.social-box-->--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--</div>--}}
    {{--<!--/.row-->--}}

    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="card">--}}
    {{--<div class="card-body">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-5">--}}
    {{--<h3 class="card-title clearfix mb-0">Traffic &amp; Sales</h3>--}}
    {{--</div>--}}
    {{--<div class="col-sm-7">--}}
    {{--<button type="button" class="btn btn-outline-primary float-right ml-3"><i class="icon-cloud-download"></i> &nbsp; Download</button>--}}
    {{--<fieldset class="form-group float-right">--}}
    {{--<div class="input-group float-right" style="width:240px;">--}}
    {{--<span class="input-group-addon"><i class="fa fa-calendar"></i></span>--}}
    {{--<input name="daterange" class="form-control date-picker" type="text">--}}
    {{--</div>--}}
    {{--</fieldset>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<hr class="m-0">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-12 col-lg-4">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-6">--}}
    {{--<div class="callout callout-info">--}}
    {{--<small class="text-muted">New Clients</small>--}}
    {{--<br>--}}
    {{--<strong class="h4">9,123</strong>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="sparkline-chart-1" width="100" height="30"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--<div class="col-sm-6">--}}
    {{--<div class="callout callout-danger">--}}
    {{--<small class="text-muted">Recuring Clients</small>--}}
    {{--<br>--}}
    {{--<strong class="h4">22,643</strong>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="sparkline-chart-2" width="100" height="30"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--</div>--}}
    {{--<!--/.row-->--}}
    {{--<hr class="mt-0">--}}
    {{--<ul class="horizontal-bars">--}}
    {{--<li>--}}
    {{--<div class="title">--}}
    {{--Monday--}}
    {{--</div>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="title">--}}
    {{--Tuesday--}}
    {{--</div>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="title">--}}
    {{--Wednesday--}}
    {{--</div>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="title">--}}
    {{--Thursday--}}
    {{--</div>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="title">--}}
    {{--Friday--}}
    {{--</div>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="title">--}}
    {{--Saturday--}}
    {{--</div>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<div class="title">--}}
    {{--Sunday--}}
    {{--</div>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="legend">--}}
    {{--<span class="badge badge-pill badge-info"></span>--}}
    {{--<small>New clients</small> &nbsp;--}}
    {{--<span class="badge badge-pill badge-danger"></span>--}}
    {{--<small>Recurring clients</small>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--<div class="col-sm-6 col-lg-4">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-6">--}}
    {{--<div class="callout callout-warning">--}}
    {{--<small class="text-muted">Pageviews</small>--}}
    {{--<br>--}}
    {{--<strong class="h4">78,623</strong>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="sparkline-chart-3" width="100" height="30"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--<div class="col-sm-6">--}}
    {{--<div class="callout callout-success">--}}
    {{--<small class="text-muted">Organic</small>--}}
    {{--<br>--}}
    {{--<strong class="h4">49,123</strong>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="sparkline-chart-4" width="100" height="30"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--</div>--}}
    {{--<!--/.row-->--}}
    {{--<hr class="mt-0">--}}
    {{--<ul class="horizontal-bars type-2">--}}
    {{--<li>--}}
    {{--<i class="icon-user"></i>--}}
    {{--<span class="title">Male</span>--}}
    {{--<span class="value">43%</span>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-user-female"></i>--}}
    {{--<span class="title">Female</span>--}}
    {{--<span class="value">37%</span>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="divider"></li>--}}
    {{--<li>--}}
    {{--<i class="icon-globe"></i>--}}
    {{--<span class="title">Organic Search</span>--}}
    {{--<span class="value">191,235--}}
    {{--<span class="text-muted small">(56%)</span>--}}
    {{--</span>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-social-facebook"></i>--}}
    {{--<span class="title">Facebook</span>--}}
    {{--<span class="value">51,223--}}
    {{--<span class="text-muted small">(15%)</span>--}}
    {{--</span>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-social-twitter"></i>--}}
    {{--<span class="title">Twitter</span>--}}
    {{--<span class="value">37,564--}}
    {{--<span class="text-muted small">(11%)</span>--}}
    {{--</span>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-social-linkedin"></i>--}}
    {{--<span class="title">LinkedIn</span>--}}
    {{--<span class="value">27,319--}}
    {{--<span class="text-muted small">(8%)</span>--}}
    {{--</span>--}}
    {{--<div class="bars">--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="divider text-center">--}}
    {{--<button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="show more"><i class="icon-options"></i></button>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--<div class="col-sm-6 col-lg-4">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-6">--}}
    {{--<div class="callout">--}}
    {{--<small class="text-muted">CTR</small>--}}
    {{--<br>--}}
    {{--<strong class="h4">23%</strong>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="sparkline-chart-5" width="100" height="30"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--<div class="col-sm-6">--}}
    {{--<div class="callout callout-primary">--}}
    {{--<small class="text-muted">Bounce Rate</small>--}}
    {{--<br>--}}
    {{--<strong class="h4">5%</strong>--}}
    {{--<div class="chart-wrapper">--}}
    {{--<canvas id="sparkline-chart-6" width="100" height="30"></canvas>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--</div>--}}
    {{--<!--/.row-->--}}
    {{--<hr class="mt-0">--}}
    {{--<ul class="icons-list">--}}
    {{--<li>--}}
    {{--<i class="icon-screen-desktop bg-primary"></i>--}}
    {{--<div class="desc">--}}
    {{--<div class="title">iMac 4k</div>--}}
    {{--<small>Lorem ipsum dolor sit amet</small>--}}
    {{--</div>--}}
    {{--<div class="value">--}}
    {{--<div class="small text-muted">Sold this week</div>--}}
    {{--<strong>1.924</strong>--}}
    {{--</div>--}}
    {{--<div class="actions">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-screen-smartphone bg-info"></i>--}}
    {{--<div class="desc">--}}
    {{--<div class="title">Samsung Galaxy Edge</div>--}}
    {{--<small>Lorem ipsum dolor sit amet</small>--}}
    {{--</div>--}}
    {{--<div class="value">--}}
    {{--<div class="small text-muted">Sold this week</div>--}}
    {{--<strong>1.224</strong>--}}
    {{--</div>--}}
    {{--<div class="actions">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-screen-smartphone bg-warning"></i>--}}
    {{--<div class="desc">--}}
    {{--<div class="title">iPhone 6S</div>--}}
    {{--<small>Lorem ipsum dolor sit amet</small>--}}
    {{--</div>--}}
    {{--<div class="value">--}}
    {{--<div class="small text-muted">Sold this week</div>--}}
    {{--<strong>1.163</strong>--}}
    {{--</div>--}}
    {{--<div class="actions">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-user bg-danger"></i>--}}
    {{--<div class="desc">--}}
    {{--<div class="title">Premium accounts</div>--}}
    {{--<small>Lorem ipsum dolor sit amet</small>--}}
    {{--</div>--}}
    {{--<div class="value">--}}
    {{--<div class="small text-muted">Sold this week</div>--}}
    {{--<strong>928</strong>--}}
    {{--</div>--}}
    {{--<div class="actions">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-social-spotify bg-success"></i>--}}
    {{--<div class="desc">--}}
    {{--<div class="title">Spotify Subscriptions</div>--}}
    {{--<small>Lorem ipsum dolor sit amet</small>--}}
    {{--</div>--}}
    {{--<div class="value">--}}
    {{--<div class="small text-muted">Sold this week</div>--}}
    {{--<strong>893</strong>--}}
    {{--</div>--}}
    {{--<div class="actions">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-cloud-download bg-danger"></i>--}}
    {{--<div class="desc">--}}
    {{--<div class="title">Ebook</div>--}}
    {{--<small>Lorem ipsum dolor sit amet</small>--}}
    {{--</div>--}}
    {{--<div class="value">--}}
    {{--<div class="small text-muted">Downloads</div>--}}
    {{--<strong>121.924</strong>--}}
    {{--</div>--}}
    {{--<div class="actions">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<i class="icon-camera bg-warning"></i>--}}
    {{--<div class="desc">--}}
    {{--<div class="title">Photos</div>--}}
    {{--<small>Lorem ipsum dolor sit amet</small>--}}
    {{--</div>--}}
    {{--<div class="value">--}}
    {{--<div class="small text-muted">Uploaded</div>--}}
    {{--<strong>12.125</strong>--}}
    {{--</div>--}}
    {{--<div class="actions">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</div>--}}
    {{--</li>--}}
    {{--<li class="divider text-center">--}}
    {{--<button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="show more"><i class="icon-options"></i></button>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--</div>--}}
    {{--<!--/.row-->--}}
    {{--<br>--}}
    {{--<table class="table table-responsive-sm table-hover table-outline mb-0">--}}
    {{--<thead class="thead-light">--}}
    {{--<tr>--}}
    {{--<th class="text-center"><i class="icon-people"></i></th>--}}
    {{--<th>User</th>--}}
    {{--<th class="text-center">Country</th>--}}
    {{--<th>Usage</th>--}}
    {{--<th class="text-center">Payment Method</th>--}}
    {{--<th>Activity</th>--}}
    {{--<th class="text-center">Satisfaction</th>--}}
    {{--<th class="text-center"><i class="icon-settings"></i></th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--<tr>--}}
    {{--<td class="text-center">--}}
    {{--<div class="avatar">--}}
    {{--<img src="img/avatars/1.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">--}}
    {{--<span class="avatar-status badge-success"></span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div>Yiorgos Avraamu</div>--}}
    {{--<div class="small text-muted">--}}
    {{--<span>New</span> | Registered: Jan 1, 2015--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="flag-icon flag-icon-us h4 mb-0" title="us" id="us"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="clearfix">--}}
    {{--<div class="float-left">--}}
    {{--<strong>50%</strong>--}}
    {{--</div>--}}
    {{--<div class="float-right">--}}
    {{--<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="fa fa-cc-mastercard" style="font-size:24px"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="small text-muted">Last login</div>--}}
    {{--<strong>10 sec ago</strong>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<div class="gaugejs-wrap sparkline" style="width:34px;height:34px">--}}
    {{--<canvas id="gauge-1" width="34" height="34"></canvas>--}}
    {{--<span class="value">48%</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td class="text-center">--}}
    {{--<div class="avatar">--}}
    {{--<img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">--}}
    {{--<span class="avatar-status badge-danger"></span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div>Avram Tarasios</div>--}}
    {{--<div class="small text-muted">--}}

    {{--<span>Recurring</span> | Registered: Jan 1, 2015--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="flag-icon flag-icon-br h4 mb-0" title="br" id="br"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="clearfix">--}}
    {{--<div class="float-left">--}}
    {{--<strong>10%</strong>--}}
    {{--</div>--}}
    {{--<div class="float-right">--}}
    {{--<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="fa fa-cc-visa" style="font-size:24px"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="small text-muted">Last login</div>--}}
    {{--<strong>5 minutes ago</strong>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<div class="gaugejs-wrap sparkline" style="width:34px;height:34px">--}}
    {{--<canvas id="gauge-2" width="34" height="34"></canvas>--}}
    {{--<span class="value">61%</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td class="text-center">--}}
    {{--<div class="avatar">--}}
    {{--<img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">--}}
    {{--<span class="avatar-status badge-warning"></span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div>Quintin Ed</div>--}}
    {{--<div class="small text-muted">--}}
    {{--<span>New</span> | Registered: Jan 1, 2015--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="flag-icon flag-icon-in h4 mb-0" title="in" id="in"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="clearfix">--}}
    {{--<div class="float-left">--}}
    {{--<strong>74%</strong>--}}
    {{--</div>--}}
    {{--<div class="float-right">--}}
    {{--<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="fa fa-cc-stripe" style="font-size:24px"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="small text-muted">Last login</div>--}}
    {{--<strong>1 hour ago</strong>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<div class="gaugejs-wrap sparkline" style="width:34px;height:34px">--}}
    {{--<canvas id="gauge-3" width="34" height="34"></canvas>--}}
    {{--<span class="value">33%</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td class="text-center">--}}
    {{--<div class="avatar">--}}
    {{--<img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">--}}
    {{--<span class="avatar-status badge-dark"></span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div>Enéas Kwadwo</div>--}}
    {{--<div class="small text-muted">--}}
    {{--<span>New</span> | Registered: Jan 1, 2015--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="flag-icon flag-icon-fr h4 mb-0" title="fr" id="fr"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="clearfix">--}}
    {{--<div class="float-left">--}}
    {{--<strong>98%</strong>--}}
    {{--</div>--}}
    {{--<div class="float-right">--}}
    {{--<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="fa fa-paypal" style="font-size:24px"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="small text-muted">Last login</div>--}}
    {{--<strong>Last month</strong>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<div class="gaugejs-wrap sparkline" style="width:34px;height:34px">--}}
    {{--<canvas id="gauge-4" width="34" height="34"></canvas>--}}
    {{--<span class="value">23%</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td class="text-center">--}}
    {{--<div class="avatar">--}}
    {{--<img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">--}}
    {{--<span class="avatar-status badge-success"></span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div>Agapetus Tadeáš</div>--}}
    {{--<div class="small text-muted">--}}
    {{--<span>New</span> | Registered: Jan 1, 2015--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="flag-icon flag-icon-es h4 mb-0" title="es" id="es"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="clearfix">--}}
    {{--<div class="float-left">--}}
    {{--<strong>22%</strong>--}}
    {{--</div>--}}
    {{--<div class="float-right">--}}
    {{--<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="fa fa-google-wallet" style="font-size:24px"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="small text-muted">Last login</div>--}}
    {{--<strong>Last week</strong>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<div class="gaugejs-wrap sparkline" style="width:34px;height:34px">--}}
    {{--<canvas id="gauge-5" width="34" height="34"></canvas>--}}
    {{--<span class="value">78%</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--<tr>--}}
    {{--<td class="text-center">--}}
    {{--<div class="avatar">--}}
    {{--<img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">--}}
    {{--<span class="avatar-status badge-danger"></span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div>Friderik Dávid</div>--}}
    {{--<div class="small text-muted">--}}
    {{--<span>New</span> | Registered: Jan 1, 2015--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="flag-icon flag-icon-pl h4 mb-0" title="pl" id="pl"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="clearfix">--}}
    {{--<div class="float-left">--}}
    {{--<strong>43%</strong>--}}
    {{--</div>--}}
    {{--<div class="float-right">--}}
    {{--<small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="progress progress-xs">--}}
    {{--<div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<i class="fa fa-cc-amex" style="font-size:24px"></i>--}}
    {{--</td>--}}
    {{--<td>--}}
    {{--<div class="small text-muted">Last login</div>--}}
    {{--<strong>Yesterday</strong>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<div class="gaugejs-wrap sparkline" style="width:34px;height:34px">--}}
    {{--<canvas id="gauge-6" width="34" height="34"></canvas>--}}
    {{--<span class="value">11%</span>--}}
    {{--</div>--}}
    {{--</td>--}}
    {{--<td class="text-center">--}}
    {{--<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<!--/.col-->--}}
    {{--</div>--}}
    {{--<!--/.row-->--}}
    {{--</div>--}}

    {{--</div>--}}
    <!-- /.conainer-fluid -->
    </main>
</div>
<footer class="app-footer">
    <span class="text-muted font-xs">MUTINY! Copyright © 2018 M.S. All rights reserved.</span>
    <span class="text-muted ml-auto font-xs">MUTINY! is an independent fan website. Images, content, Divergent © Veronica Roth, and/or their respective owners. User content on this website is credited to the individuals.</span>
</footer>


<!-- Scripts -->
@hassection('captcha')
    @yield('captcha')
@endif

<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{ mix('/js/vendor.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>


</body>
</html>