@extends('admin.master')
@section('content')
<div class="container">
    <h1>Show Category Here..</h1>
    <a href="{{url('add_cat')}}" class="btn btn-secondary">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->c_name}}</td>
                <td><img src="category/{{$cat->c_image}}" height="100px" width="100px"></td>
                <td><a href="{{url('edit_cat',$cat->id)}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{url('delete_cat',$cat->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection