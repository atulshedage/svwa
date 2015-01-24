@extends('Layouts.defaults')

@section('content')
    <h1>File Upload Vulnerability</h1>
    <div class="row">
        <div class="col-sm-8">
            <h1>Upload File</h1>
            @include('Layouts.Partials.errors')

            {{ Form::open(array('route' => 'upload_path', 'files' => true));}}
            <!--Username Field-->
            <div class="form-group">
                {{ Form::label('file', 'Upload File :') }}
                {{ Form::file('file', null, ['data-filename-placement' => 'inside']) }}
            </div>


            <div class="form-group">
                {{ Form::submit('Post', ['class' => 'btn btn-primary']) }}
            </div>

            {{Form::close()}}

        </div>
    </div> <!-- / .row -->
    <br/>
@stop