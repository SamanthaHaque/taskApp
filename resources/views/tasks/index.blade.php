@extends('layouts.app')


@section('contents')

<button class="btn btn-success"><a href="{{ url('/tasks/create') }}">Add New Tasks</a></button>
    

<hr>

<div class="container">

    <table class="table table-bordered table-striped">
        
            <tr>
                <td>Task Name</td>
                <td>Category</td>
                <td>Details</td>
                <td>Deadline</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
            @foreach ($Task as $c)
               <tr>
                   <td> {{  $c->name}} </td>
                   <td> {{  $c->category->name}} </td>
                   <td> {{  $c->details}} </td>
                   <td> {{  $c->deadline}} </td>
                   {{-- <td> {{  $c->status}} </td> --}}
                   <td> {{  App\Enums\taskStatus::getDescription($c->status)}} </td>
                   <td class="action" style="display: flex;">
                     <div class="update" style="margin: 5px;">
                        <a href="{{url("/categories/$c->id/edit")}}" class="btn btn-warning">Update</a>
                     </div>
                     
                     <div class="delete" style="margin: 5px;">
                        <form action="{{url("/categories/$c->id")}}" method="post">
                            @csrf
                            @method("delete")
                            <input type="submit" value="delete" onclick="return confirm('Do you want to delete the category?')" class="btn btn-danger">
 
                        </form>
                     </div>
                   </td>
               </tr>
            @endforeach
        
    </table>

@endsection