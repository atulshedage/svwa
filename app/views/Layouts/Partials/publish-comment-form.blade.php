{{Form::open(array('route' => 'comment_path'));}}
<!--Username Field-->
<div class="form-group">
    {{ Form::label('body', 'Comment:') }}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required', 'ng-model' => 'body']) }}
</div>

<div class="form-group">
    {{ Form::submit('Post', ['class' => 'btn btn-primary']) }}
</div>

{{Form::close()}}