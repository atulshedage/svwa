@extends('layouts.defaults')
@section('title')
    Reflected Xss
@stop
@section('content')
    <h1>Reflected Xss</h1>
    <div class="row">

        {{Form::open(array('route' => 'source_code_xss_path', 'method' => 'get'));}}
        <div class="col-lg-6">
            <div class="input-group">
                {{ Form::text('search', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Search For......']) }}
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" value="Go">Go!</button>
                  </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        {{Form::close()}}
    </div>

    <br/>
    @foreach($searchs as $search)
        <p class="lead"> You are searching for <b>{{{ $search }}}</b> </p>
        @endforeach

    <script>
        search = {{$search}}
    </script>

@stop