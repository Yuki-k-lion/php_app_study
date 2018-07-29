@extends('layout')

@section('content')
<div class="contents row">
   <div class="container">
   {{ Form::open(['url' => '/memos', 'method' => 'patch'])}}
     <h3>
       Edit
     </h3>
     <input placeholder="Nickname" type="text" name="name" value={{$memo -> nickname}} autofocus="true"></input>
     <textarea cols="30" name="text" placeholder="text" rows="10">{{$memo->text}}</textarea>
     <input type="submit" value="SENT">
   {{ Form::close() }}
   </div>
 </div>
@endsection
