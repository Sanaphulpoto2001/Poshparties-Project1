@extends('admin.master')
@section('content')
<div class="container">
<h1>Edit Timing details here...</h1><br>
    <form action="{{url('update_tm',$time->id)}}" method="post" enctype="multipart/form-data">
        <input type="time" name="time_in" value="{{$time->t_name}}" placeholder="enter your timing  name:" class="form-control"> 
        @csrf
        <br>
        <input type="time" name="time_out" placeholder="enter your timing:" class="form-control"><br>
        <input type="date" name="date" placeholder="enter your date:" class="form-control"><br>
        <input type="submit" value="Update time" class="btn btn-danger">
    </form>
</div>

@endsection
