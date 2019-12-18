@extends('layouts.app')

@section ('content')

    <h1>Task manager</h1>

    @foreach($tasks as $task)
        <div class="text-content">
            <div class="container-fluid">
                <a href="/task/{{$task->id}}">{{$task->body}}</a>
            </div>
        </div>
    @endforeach


@endsection