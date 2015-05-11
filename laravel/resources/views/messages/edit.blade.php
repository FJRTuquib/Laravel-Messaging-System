@extends('app')
@section('content')
  <h1>Edit: {!! $message->subject !!}</h1>

  {!! Form::model($message, ['method' => 'PATCH', 'action' => ['MessagesController@update', $message->id]]) !!}
  @include('messages.form', ['submitButtonText' => 'Edit Message'])
  {!! Form::close() !!}

  @include('errors.list')
@stop