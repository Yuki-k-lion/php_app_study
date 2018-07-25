@extends('layout')

@section('content')
      <div class="contents row">
        @foreach($memos as $memo)
          <div class="content_post">
            <p>{{ $memo->text  }}</p>
            <span class="name">{{ $memo->name }}</span>
          </div>
        @endforeach
      </div>
@endsection
