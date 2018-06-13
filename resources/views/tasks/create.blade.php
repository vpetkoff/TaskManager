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
      <h5 style="margin-bottom:10px;">Create task</h5>
      <form method="POST" action="{{ url('tasks/create') }}">
        @csrf
        <div class="form-group">
          <textarea style="margin-bottom:5px;" class="form-control" name="taskCreateArea" rows="3" placeholder="Enter task text"></textarea>
          <input style="margin-bottom:5px;" type="text" class="form-control" name="taskCreateAuthor" placeholder="Enter author name">
          <select name="taskStatus" class="form-control">
            <option value="New">New</option>
            <option value="In Progress">In Progress</option>
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
          </select>
        </div>
        <input class="btn btn-light" type="submit" value="Submit">
      </form>
    </div>
  </div>
@endsection
