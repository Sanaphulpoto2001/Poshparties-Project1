@extends('admin.master')
@section('content')
<div class="container">
    <h1>Edit Services details here...</h1><br>
    <form action="{{url('update_ser',$service->id)}}" method="post" enctype="multipart/form-data">
        <input type="text" name="s_name" value="{{$service->s_name}}" placeholder="enter your services name:" class="form-control"> 
        @csrf
        <br>
        <input type="file" name="s_image" placeholder="enter your services image:" class="form-control"><br>
        <img src="{{ asset('service/' . $service->s_image) }}" height="100px" width="100px" alt="Service Image">
<br>
        <input type="submit" value="Update Services" class="btn btn-danger">
    </form>

@endsection