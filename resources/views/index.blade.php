@extends('layouts.bootstrap')

@section('content')

  @foreach ($tasks as $task)
  <div class="row">
    <div class="col-md-12 bg-light" style="margin-bottom:20px; padding-top:15px;">
        <p>{{ $task->body }}</p>
        <p>Author: {{ $task->author }}</p>
        <p>Created: {{ $task->created_at }}</p>
        <p>Last update: {{ $task->updated_at }}</p>
    </div>
  </div>
  @endforeach

@endsection
