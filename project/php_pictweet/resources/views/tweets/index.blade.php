@extends('layout')

@section('content')
  <p>Hello?How are you feeling?</p>

  @foreach($tweets as $tweet)
    <p>{{$tweet->text}}</p>
  @endforeach

@endsection
