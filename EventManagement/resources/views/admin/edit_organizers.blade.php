@extends('admin.master')
@section('content')
<div class="container">
    <h1>Edit Event Organizers details here...</h1><br>
    <form action="{{url('update_org',$organizer->id)}}" method="post" enctype="multipart/form-data">
        <input type="text" name="o_name" value="{{$organizer->o_name}}" placeholder="add name:" class="form-control"> 
        @csrf
        <br>
        <input type="email" name="o_email" value="{{$organizer->o_email}}" placeholder="add email:" class="form-control"> 
        <input type="text" name="o_description" value="{{$organizer->o_description}}" placeholder="add description:" class="form-control"> 
        <input type="file" name="o_image" placeholder="enter organizer image:" class="form-control"><br>
        <img src="{{ asset('organizer/' . $organizer->o_image) }}" alt="">
        <input type="submit" value="Update Event Organizer" class="btn btn-danger">
    </form>

@endsection