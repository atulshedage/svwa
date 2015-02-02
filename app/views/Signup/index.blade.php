@extends('layouts.defaults')
@section('title')
    Sign Up
@stop
@section('content')
    <div id="form">
            <h1>Register for SVWA</h1>

            @include('layouts.partials.errors')

            {{Form::open(array('route' => 'signup_path'));}}
            <!--Username Field-->
            <div class="form-group">
                {{ Form::label('username', 'Username:') }}
                {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'username']) }}
            </div>
            <!--Email Field-->
            <div class="form-group">
                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'email']) }}
            </div>

            <!--Password Field-->
            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'password']) }}
            </div>
            <!-- Confirm Password -->
            <div class="form-group">
                {{ Form::label('password', 'Confirm Password:') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'password_confirmation']) }}
            </div>

        <div class="form-group buttons">
            <button class="btn btn-primary" type="submit">Sign Up </button>
        </div>

            {{Form::close()}}
    </div>
@stop