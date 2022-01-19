@extends('layouts.app')


@section('contents')

<button class="btn btn-success"><a href="{{ url('/categories/create') }}">Add New Category</a></button>
    

<hr>

<div class="container">
    <table class="table table-bordered table-striped">
        
            <tr>
                <td>Name</td>
                <td>Action</td>
            </tr>
            @foreach ($category_list as $c)
               <tr>
                   <td>
                     {{  $c->name;}}
                   </td>
                   <td class="action" style="display: flex;">
                     <div class="update" style="margin: 5px;">
                        <a href="{{url("/categories/$c->id/edit")}}" class="btn btn-warning">Update</a>
                     </div>
                       {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
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
</div>
@endsection