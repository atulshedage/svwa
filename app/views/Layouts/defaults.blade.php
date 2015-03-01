<!doctype html>
<html lang="en" ng-app="SVWA">
<head>
    <meta charset="UTF-8">
    <title>Suruji Vulnerable Web Application :@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/respond.min.js') }}" type="text/javascript"></script>
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



<script src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>