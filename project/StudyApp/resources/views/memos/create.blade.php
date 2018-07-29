@extends('layout')

@section('content')
<div class="contents row">
    <div class="container">
        {{ Form::open(['url' => '/memos', 'method' => 'post']) }}
            <h3>
                    投稿する
            </h3>
            <input placeholder="Nickname" type="text" name="name"></input>
            <textarea cols="30" name="text" placeholder="text" rows="10"></textarea>
            <input type="submit" value="SENT">
        {{ Form::close() }}
    </div>
</div>
@endsection
