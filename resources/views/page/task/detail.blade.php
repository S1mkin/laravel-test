@extends('layouts.app')

@section ('content')

    <h1>Task number {{$task->id}}</h1>

        <div class="text-content">
            <div class="container-fluid">
                <p><b>Task body:</b> {{$task->body}}</p>
                <p><a href="/task/">Return to list</a></p>
            </div>
        </div>

@endsection