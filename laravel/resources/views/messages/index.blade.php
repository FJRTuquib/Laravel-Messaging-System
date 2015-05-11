@extends('app')
@section('content')

  @if(Auth::user() == NULL)
  @else
    <h3>Send a message:</h3>
    {!! Form::open(['url' => 'messages']) !!}
    {!! Form::hidden('author', Auth::user()->name) !!}
    @include('messages.form', ['submitButtonText' => 'Send Message'])
    {!! Form::close() !!}
    @include('errors.list')
  @endif

    <h3>Messages:</h3>
    <table class="table table-striped">

      @foreach($messages as $message)
        <tr><td>
          <div class="input-group">

              <article>
                <h2> {{ $message->subject }} by {{ $message->author }} </h2>
                <div class="body">{{ $message->message }}</div>
              </article>

            @if(Auth::user() == NULL)
            @else
              @if((Auth::user()->type == 'admin') || (Auth::user()->type == 'regular' && Auth::user()->id ==  $message->user_id))
                <span class="input-group-btn">
                <a class="btn btn-default" href="messages/{{ $message->id }}/edit">EDIT</a>
                {!! Form::open(['method' => 'DELETE', 'action' => ['MessagesController@destroy', $message->id]]) !!}
                {!! Form::submit('DELETE', ['class' => 'btn btn-default btn-xs']) !!}
                {!! Form::close() !!}
               </span>
              @endif
            @endif

          </div>
      </td></tr>
    @endforeach

  </table>
@stop