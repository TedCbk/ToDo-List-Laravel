@extends('layouts.app')

@section('content')

<div class="container mt-4">
<h1>Create Todo</h1>
{{-- Cannot use only the TodosController@store --}}
{!! Form::open(['action' => 'App\Http\Controllers\TodosController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('Task') }}
    {{ Form::bsTextArea('Description') }}
    {{ Form::bsText('Date') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}    
</div>


@endsection