@extends('layouts.app')


@section('contents')

<div class="container">
    <center><h3>Add New Category</h3></center>
    <form class="form-horizontal" action="{{ url('/categories') }}" method="POST">
        @csrf
        <div class="form-group">
          <label class="control-label col-sm-2"  for="category">Category Name:</label>
          <div class="col-sm-10">
            <input type="text" name="category_name" value="{{ old('category_name') }}" class="form-control" placeholder="Enter A Category Name">
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