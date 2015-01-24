@extends('layouts.defaults')

@section('content')
    <h1>Reflected Xss</h1>
    <div class="row">
        <div id="form" class="search">
            {{Form::open(array('route' => 'search_path', 'method' => 'get'));}}
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
    </div> <!-- / .row -->
    <br/>
    @foreach($searchs as $search)
        <p class="lead"> You are searching for <b>{{$search}}</b> </p>
    @endforeach
@stop