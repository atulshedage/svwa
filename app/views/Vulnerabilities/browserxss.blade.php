@extends('Layouts.defaults')
@section('title')
    Browser Based Xss
@stop
@section('content')

    <body style="background-color:{{strip_tags(Input::old('color'))}}">
{{Form::open(array('route' => 'browser_xss_path'));}}
<!-- First Name -->
<div class="form-group">
    {{ Form::label('color', 'Color') }}
    {{ Form::text('color', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::submit('Change Background', ['class' => 'btn btn-primary']) }}
</div>

{{Form::close()}}
@stop