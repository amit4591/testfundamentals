@extends('layouts.master')

@section('content')



    @foreach($tasks as $task)
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description}}</p>
    <p>
        <a href="{{ url('tasks', $task->id) }}" class="btn btn-info">View Task</a>
        <a href="{{ url('edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
    </p>
    <hr>
    @endforeach

@stop