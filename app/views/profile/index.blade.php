@extends('Layouts.defaults')

@section('content')
    <h1>Update Your Profile</h1>

    @include('Layouts.Partials.errors')

    <form method="POST" action="http://127.0.0.1/dvwa/public/Profile" accept-charset="UTF-8">
    <!-- First Name -->
    <div class="form-group">
        {{ Form::label('first_name', 'First Name') }}
        {{ Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'first_name']) }}
    </div>

    <!-- Last Name -->
    <div class="form-group">
        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'last_name']) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Sign Up', ['class' => 'btn btn-primary', 'ng-disabled' => 'registrationForm.$invalid']) }}
    </div>

    </form>
@stop
