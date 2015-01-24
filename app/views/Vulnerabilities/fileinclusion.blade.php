@extends('Layouts.defaults')

@section('title')
    File Inclusion
@stop

@section('content')
    <h2>File Inclusion</h2>
    <p>Add File name at end of page?name=[filename]</p>
    <p>E.g. <a href="{{URL::asset('page?name=dvwa.txt')}}" target="_blank">{{URL::asset('page?name=dvwa.txt')}}</a></p>

@stop