@extends('Layouts.defaults')

@section('title')
    Union Based SQL Injection
@stop

@section('content')
    <h1>Type any User id to retrive the information.</h1>
    <div class="col-md-4">
        @include('layouts.partials.errors')
        {{Form::open(array('route' => 'normal_injection_path','method' => 'get'));}}
        <!--Username Field-->
        <div class="form-group">
            {{ Form::text('id', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'username']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Get Information', ['class' => 'btn btn-primary', 'ng-disabled' => 'registrationForm.$invalid']) }}
        </div>
        {{Form::close()}}

        <h2>Result</h2>
        @foreach ($users as $user)
            <div class="well">
                {{$user->username}}
            </div>
        @endforeach
    </div>
@stop