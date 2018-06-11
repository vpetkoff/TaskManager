@extends('layouts.bootstrap')

@section('content')

  <div class="row">
    <div class="col-md-12 bg-light" style="margin-bottom:20px; padding-top:15px;">
        <p>{{ $task->body }}</p>
        <p>Author: {{ $task->author }}</p>
        <p>Created: {{ $task->created_at }}</p>
        <p>Last update: {{ $task->updated_at }}</p>
        <div class="row">
          <a href="/" class="btn btn-secondary" style="margin-right:2px;">Back to Home</a>
          <form method="POST" action="/tasks/delete/{{ $task->id }}">
            {{ csrf_field() }}
            <input class="btn btn-secondary" type="submit" value="Delete">
          </form>
        </div>
    </div>
  </div>

@endsection
