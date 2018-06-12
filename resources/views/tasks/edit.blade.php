@extends('layouts.bootstrap')

@section('content')
  <div class="row">

    <!-- Monitor for validation errors -->
    @if (count($errors) > 0)
      <div class = "col-md-12 alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="col-md-12">
      <h5>Update task</h5>
      <form method="POST" action={{ url("tasks/update/$task->id") }}>
        @csrf
        @method('PUT')
        <div class="form-group">
          <textarea class="form-control" name="taskEditArea" rows="3">{{ $task->body }}</textarea>
          <input type="text" class="form-control" name="taskEditAuthor" value="{{ $task->author }}">
        </div>
        <input class="btn btn-light" type="submit" value="Submit">
      </form>
    </div>
  </div>
@endsection
