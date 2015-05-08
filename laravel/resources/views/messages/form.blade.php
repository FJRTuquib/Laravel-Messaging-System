{!! Form::hidden('author', Auth::user()->name) !!}

<div class="form-group">
  {!! Form::label('subject', 'Subject:') !!}
  {!! Form::text('subject', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('message', 'Message:') !!}
  {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-success btn-lg btn-block']) !!}
</div>