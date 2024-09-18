@extends('admin.master')
@section('content')
<div class="container">
    <h1>Add Event Organizers details here...</h1><br>
    <form action="{{url('store_org')}}" method="post" enctype="multipart/form-data">
        <input type="text" name="o_name" placeholder="add name:" class="form-control"> 
        @csrf
        <br>
        <input type="email" name="o_email" placeholder="add email:" class="form-control"> <br>
        <input type="text" name="o_description" placeholder="add description:" class="form-control"> <br>
        <input type="file" name="o_image" placeholder="add image:" class="form-control"><br>
        <input type="submit" value="Add Event Organizer" class="btn btn-danger">
    </form>
</div>

@endsection