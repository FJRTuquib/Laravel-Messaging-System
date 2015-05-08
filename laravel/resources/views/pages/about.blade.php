@extends('master')

{{--
@if/$first == 'Vulture')
  <h2>Welcome</h2>
@else
  <h4>You are not a vulture</h4>
@endif
--}}


<h3>Messages:</h3>

<ul>
  @foreach ($messages as $message)
    <li>{{ $message }}</li>
  @endforeach
</ul>

@section('content')

 {{-- <!--<h1> About Page by {{ $first }} {{ $second }}</h1>-->--}}

  <p>
    This page is the about page blah blah blah. Testing out Laravel 5, watching video tutorials to learn.
  </p>
@stop