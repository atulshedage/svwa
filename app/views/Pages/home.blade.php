@extends('layouts.defaults')
@section('title')
    Home
@stop
@section('content')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Cross Site Scripting</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{link_to_route('reflected_xss_path','Reflected Xss')}}</li>
                        <li class="list-group-item">{{link_to_route('stored_xss_path','Stored Xss')}}</li>
                        <li class="list-group-item">{{link_to_route('browser_xss_path','Browser Based Xss')}}</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Cross Site Request Forgery</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{link_to_route('csrf_profile_update_path','CSRF Normal')}}</li>
                        <li class="list-group-item"><a href="#">CSRF Bypass</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Insecure Direct Object References</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{link_to_route('idor_path','IDOR')}}</li>
                    </ul>
                </div>

            </div>
        </div>

    </div> <!-- End Row 1 -->

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">SQL Injection</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{link_to_route('normal_injection_path','Union Based SQL Injection')}}</li>
                        <li class="list-group-item"><a href="#">Blind Based Injection</a></li>
                        <li class="list-group-item">{{link_to_route('login_bypass_path','Login Bypass')}}</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Broken Authentication</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{link_to_route('bruteforce_login_path','Bruteforce')}}</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Unvalidated Redirects</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{link_to_route('redirect_path','Open Redirection')}}</li>
                    </ul>
                </div>

            </div>
        </div>

    </div> <!-- End Of Row 2 -->
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">File Inclusion</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">{{link_to_route('get_page','File Inclusion')}}</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

@stop