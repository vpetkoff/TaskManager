@extends('layouts.bootstrap')

@section('content')

  @foreach ($tasks as $task)
  <div class="row">
    <div class="col-md-12">
        <p>{{ $task->body }}</p>
        <p>{{ $task->author }}</p>
        <p>{{ $task->created_at }}</p>
        <p>{{ $task->updated_at }}</p>
    </div>
  </div>
  @endforeach

@endsection
