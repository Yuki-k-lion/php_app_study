@extends('layout')

@section('content')
      <div class="contents row">
        @foreach($memos as $memo)
          <div class="content_post">
            <ul class = "memo__list">
              <li><a href="#">Edit</a>
              <li><a href="memos/{{$memo->id}}/delete">Delete</a>
            </ul>
            <p>{{ $memo->text  }}</p>
            <span class="name">{{ $memo->name }}</span>
          </div>
        @endforeach
      </div>
@endsection
