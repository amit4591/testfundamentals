@extends('layouts.master')

@section('content')

    <h1>Edit Task - Task Name </h1>
    <p class="lead">Edit this task below. <a href="{{ url('tasks', $task->id) }}">Go back to all tasks.</a></p>
    <hr>
    <a href="{{ url('tasks.edit', $task->id) }}">Edit</a>
    {!! Form::model($task, ['method' => 'PATCH','route' => ['tasks.update', $task->id]]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
@stop