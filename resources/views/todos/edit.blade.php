@extends('layouts.app')

@section('content')

<div class="container mt-4">
<a href="/todo/{{$todo->id}}">Go back</a>
<h1>Edit Todo</h1>
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