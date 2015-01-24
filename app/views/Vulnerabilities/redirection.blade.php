@extends('Layouts.defaults')

@section('title')
    Open Redirection
@stop

@section('content')
    <h2>Open Redirection</h2>
    <p>To make open redirection use redirection?url=[[Your URL]]</p>
    <p>E.g. <a href="{{URL::asset('redirection?url=http://suruji.com')}}" target="_blank">{{URL::asset('redirection?url=http://suruji.com')}}</a></p>
@stop