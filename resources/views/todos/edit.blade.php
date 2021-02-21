@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1>Edit Todo</h1>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> Your are about to edit a task ! <a href="/todo/{{$todo->id}}">Go back ?</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


{{-- Cannot use only the TodosController@store --}}
{!! Form::open(['action' => ['App\Http\Controllers\TodosController@update', $todo->id], 'method' => 'POST']) !!}
    {{ Form::bsText('Task', $todo->text) }}
    {{ Form::bsTextArea('Description', $todo->body) }}
    {{ Form::bsText('Date', $todo->due) }}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}    
</div>


@endsection