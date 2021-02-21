@extends('layouts.app')

@section('content')
  <div class="container mt-4">
      <div class="jumbotron">
  <h1><a href="/todo/{{$todo->id}}">{{$todo->text}}</a></h1>
  <div class="badge badge-danger">{{$todo->due}}</div>
  <hr>
  <p>{{$todo->body}}</p>
  <a class="btn btn-dark" href="/">Go Back</a>
  <a href="/todo/{{$todo->id}}/edit " class="btn btn-secondary">Edit</a>
  </div>

</div>

@endsection
