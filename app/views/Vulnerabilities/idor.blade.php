@extends('Layouts.defaults')
@section('title')
    Insecure Direct Object Reference (IDOR)
@stop
@section('content')
    <h1>Insecure Direct Object References</h1>
    <div class="row">
        <div class="col-sm-8">
            <h1>Post Comment</h1>
            @include('Layouts.Partials.errors')

            {{Form::open(array('route' => 'idor_path'));}}
            <!--Username Field-->
            <div class="form-group">
                {{ Form::label('body', 'Comment:') }}
                {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'body']) }}
            </div>
            <div class="form-group">
                {{ Form::hidden('userId',Auth::user()->id) }}
            </div>


            <div class="form-group">
                {{ Form::submit('Post', ['class' => 'btn btn-primary']) }}
            </div>

            {{Form::close()}}

            <h2>Comments</h2>
            @foreach($posts as $post)
                <div class="media">
                    <a class="media-left" href="#">
                        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnMvPjxyZWN0IHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjEyLjUiIHk9IjMyIiBzdHlsZT0iZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQ7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9nPjwvc3ZnPg==" alt="...">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $post->user->username }}</h4>
                        <p>{{{$post->body}}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div> <!-- / .row -->
    <br/>
@stop