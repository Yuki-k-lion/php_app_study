@extends('layout')

@section('content')
      <div class="contents row">
        @foreach($memos as $memo)
          {{-- <div class="content_post">
            <ul class = "memo__list">
              <li><a href="/memos/{{$memo->id}}/edit">Edit</a>
              <li><a href="/memos/{{$memo->id}}/delete">Delete</a>
            </ul>
            <p>{{ $memo->text  }}</p>
            <span class="name">{{ $memo->name }}</span>
          </div> --}}
          <div class="col s12">
            <div class="card horizontal">
              <div class="card-image">
                <img src="https://lorempixel.com/100/190/nature/6">
              </div>
              <div class="card-stacked">
                <div class="card-content">

                    <h6 class="name">{{ $memo->name }}</h6>
                    <p>{{ $memo->text  }}</p>
                    <a href="/memos/{{$memo->id}}/edit" class="btn-floating halfway-fab accent-3 waves-effect waves-light cyan pulse"><i class="material-icons">edit</i></a>

                </div>
                <div class="card-action">
                  <a href="/memos/{{$memo->id}}/delete">Delete</a>
                </div>
              </div>
            </div>
          </div>

        @endforeach
      </div>
@endsection
