@extends('layouts.app')

@section('content')
  <div class="container mt-4">
      <div class="jumbotron">
  <h1><a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h1>
  <div class="badge badge-danger">{{$todo->due}}</div>
  <hr>
  <p>{{$todo->body}}</p>
  <div class="d-flex justify-content-between">
  <a class="btn btn-dark" href="/">Go Back</a>
  <a href="/todo/{{$todo->id}}/edit " class="btn btn-secondary">Edit</a>
  {!! Form::open(['action' => ['App\Http\Controllers\TodosController@destroy', $todo->id], 'method' => 'POST']) !!}
  {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
{!! Form::close() !!} 
  </div>  
  </div>

</div>

@endsection
