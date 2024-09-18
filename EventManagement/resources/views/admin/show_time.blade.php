@extends('admin.master')
@section('content')
<div class="container">
    <h1>Show Timing Here..</h1>
    <a href="{{url('add_tm')}}" class="btn btn-secondary">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Time_in</th>
                <th>Time_out</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($time as $tim)
            <tr>
                <td>{{$tim->id}}</td>
                <td>{{$tim->time_in}}</td>
                <td>{{$tim->time_out}}</td>
                <td>{{$tim->date}}</td>
                <td><a href="{{url('edit_tm',$tim->id)}}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{url('delete_tm',$tim->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection