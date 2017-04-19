@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <a href="{{ url('/create') }}" class="btn btn-info">Create task</a>
                <a href="{{ url('/alltasks') }}" class="btn btn-primary">Show Tasks</a>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
