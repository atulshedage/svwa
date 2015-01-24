@extends('layouts.defaults')
@section('title')
    Bruteforce
@stop
@section('content')
    <div id="form">
        <h1>Bruteforce Login</h1>
        @include('Layouts.Partials.errors')
        {{Form::open(array('route' => 'bruteforce_login_path','role' => 'form'));}}
        <!--Username Field-->
        <div class="form-group">
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'username']) }}
        </div>
        <!--Password Field-->

        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" required="required" ng-model="password" name="password" type="password" value="" id="password">
        </div>
        <!-- Sign in Button -->
        <div class="form-group buttons">
            <button class="btn btn-primary" type="submit">Login </button>
        </div>
        {{Form::close()}}
    </div>
@stop