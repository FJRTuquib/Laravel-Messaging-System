@extends('master')

@section('content')
  <h1>Edit: {!! $article->title !!}</h1>

  {{--}}{!! Form::open(['method' => 'PATCH', 'url' => 'articles/'. $article->id]) !!}--}}
  {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

  @include('articles.form', ['submitButtonText' => 'Update Article'])
  {!! Form::close() !!}

@include('errors.list')

@stop