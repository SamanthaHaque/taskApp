@extends('layouts.app')


@section('contents')

<div class="container">
    <center><h3>Add New Tasks</h3></center>
    <form class="form-horizontal" action="{{ url('/tasks') }}" method="POST">
        @csrf
        <div class="form-group">
          <label class="control-label col-sm-2"  for="category">Task Name:</label>
          <div class="col-sm-10">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter A Task Name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"  for="category">Category:</label>
          <div class="col-sm-10">
            <select name="category_id" class="form-control">
              <option value="">--Select a category--</option>
          @foreach ($categories_list as $item)
          <option value="{{ $item->id }}" {{old('category_id')==$item->id ? 'selected': ''}}>{{$item->name}}</option>
          @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"  for="category">Task Name:</label>
          <div class="col-sm-10">
            <textarea class="form-control" value="{{ old('details')}}" name="details" cols="30" rows="10">Task Details</textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"  for="category">Task Deadline:</label>
          <div class="col-sm-10">
            <input type="date" name="deadline" value="{{ old('deadline') }}" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"  for="category">Task Status:</label>
          <div class="col-sm-10">
            <select name="status" id="" class="form-control">
              <option value="">--Select a status--</option>
            @foreach ($task_status as $x => $status)
                <option value="{{$x}}">{{ $status }}</option>
            @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
          </div>
        </div>
    </form>
      
</div>
      

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection