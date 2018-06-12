@extends('layouts.bootstrap')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h5>Create task</h5>
      <form method="POST" action="/tasks/create">
        @csrf
        <div class="form-group">
          <textarea class="form-control" name="taskCreateArea" rows="3" placeholder="Enter task text"></textarea>
          <input type="text" class="form-control" name="taskCreateAuthor" placeholder="Enter author name">
        </div>
        <input class="btn btn-light" type="submit" value="Submit">
      </form>
    </div>
  </div>
@endsection
