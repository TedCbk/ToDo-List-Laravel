@extends('layouts.app')

@section('content')

<div class="title mt-4 text-center">
    <h1>Todos</h1>
</div>
@if(count($todos) > 0)

@foreach($todos as $todo)

<div class="card mt-4 mb-4 ">
    <div class="card-body mb-4">
    <h3><a href="/todo/{{$todo->id}}">{{$todo->text}}</a> <span class="badge badge-danger">{{$todo->due}}</span></h3>
    
    </div>
</div>

@endforeach

@endif

@endsection