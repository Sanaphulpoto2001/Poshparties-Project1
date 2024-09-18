@extends('admin.master')
@section('content')
<div class="container">
    <h1>Show Event Organizers Here..</h1>
    <a href="{{url('add_org')}}" class="btn btn-secondary">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Description</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($organizer as $org)
            <tr>
                <td>{{$org->id}}</td>
                <td>{{$org->o_name}}</td>
                <td>{{$org->o_email}}</td>
                <td>{{$org->o_description}}</td>
                <td><img src="organizer/{{$org->o_image}}" height="100px" width="100px"></td>
                <td><a href="{{url('edit_org',$org->id)}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{url('delete_org',$org->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection