@extends('admin.master')
@section('content')
<div class="container">
    <h1>Show Hotels Here..</h1>
    <a href="{{url('add_hotl')}}" class="btn btn-secondary">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Hotel Name</th>
                <th>Hotel Location</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotel as $htl)
            <tr>
                <td>{{$htl->id}}</td>
                <td>{{$htl->category->c_name}}</td>
                <td>{{$htl->h_name}}</td>
                <td>{{$htl->h_location}}</td>
                <td><img src="hotel/{{$htl->h_image}}" height="100px" width="100px"></td>
                <td><a href="{{url('edit_hotl',$htl->id)}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{url('delete_hotl',$htl->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection