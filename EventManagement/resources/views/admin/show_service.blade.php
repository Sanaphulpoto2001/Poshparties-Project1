@extends('admin.master')
@section('content')
<div class="container">
    <h1>Show Services Here..</h1>
    <a href="{{url('add_ser')}}" class="btn btn-secondary">Back</a>
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
            @foreach ($service as $ser)
            <tr>
                <td>{{$ser->id}}</td>
                <td>{{$ser->s_name}}</td>
                <td><img src="service/{{$ser->s_image}}" height="100px" width="100px"></td>
                <td><a href="{{url('edit_ser',$ser->id)}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{url('delete_ser',$ser->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection