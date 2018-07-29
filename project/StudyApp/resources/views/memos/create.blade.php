@extends('layout')

@section('content')
<div class="contents row">
    <div class="container">
        {{ Form::open(['url' => '/memos', 'method' => 'post']) }}
        <h3 class="btn-large disabled">
          Create
        </h3>
        <div class="row">
           <div class="input-field col s6">
             <input id="first_name2" type="text" class="validate" name="name" autofocus="true">
             <label class="active" for="first_name2">First Name</label>
           </div>
           <div class="input-field col s12">
             <textarea id="textarea1" class="materialize-textarea" name="text"></textarea>
             <label for="textarea1">Textarea</label>
           </div>
         </div>

            {{-- <input type="submit" value="SENT" class="waves-effect waves-light btn sent-white"> --}}
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
        {{ Form::close() }}
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
@endsection
