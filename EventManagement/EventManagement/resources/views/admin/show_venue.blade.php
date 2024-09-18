@extends('admin.master')
@section('content')
<div class="container">
    <h1>Show Venues Here..</h1>
    <a href="{{url('add_ven')}}" class="btn btn-secondary">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($venue as $ven)
            <tr>
                <td>{{$ven->id}}</td>
                <td>{{$ven->category->c_name}}</td>
                <td><img src="venue/{{$ven->v_image}}" height="100px" width="100px"></td>
                <td><a href="{{url('edit_ven',$ven->id)}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{url('delete_ven',$ven->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection