@extends('admin.master')
@section('content')
<div class="container">
    <h1>Show Gallery Here..</h1>
    <a href="{{url('add_img')}}" class="btn btn-secondary">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gallery as $gall)
            <tr>
                <td>{{$gall->id}}</td>
             
                <td><img src="gallery/{{$gall->g_image}}" height="100px" width="100px"></td>
                <td><a href="{{url('edit_img',$gall->id)}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{url('delete_img',$gall->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection