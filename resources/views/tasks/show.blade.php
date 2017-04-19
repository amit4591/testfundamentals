@extends('layouts.master')

@section('content')

    <h1>{{ $task->title }}</h1>
    <p class="lead">{{ $task->description }}</p>
    <hr>

    <a href="{{ url('/') }}" class="btn btn-info">Back to all tasks</a>
    <a href="{{ url('edit', $task->id) }}" class="btn btn-primary">Edit Task</a>

    <div class="pull-right">
        <a href="{{ url('delete', $task->id) }}" class="btn btn-danger">Delete this task</a>
    </div>

@stop