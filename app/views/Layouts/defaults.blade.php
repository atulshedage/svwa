<!doctype html>
<html lang="en" ng-app="larabook">
<head>
    <meta charset="UTF-8">
    <title>Damn Vulnerable Web Application :@yield('title')</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js" type="text/javascript"></script>
    <script src="/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">
    <div id="header">@include('Layouts.Partials.nav')</div>
    <div id="content">
        <div class="container">
            @include('flash::message')
            @yield('content')
        </div>

    </div>
    <div id="footer">
        @include(('Layouts.Partials.footer'))
    </div>
</div>



<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>