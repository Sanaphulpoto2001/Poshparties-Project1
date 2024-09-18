@extends('admin.master')
@section('content')
<div class="container">
    <h1>Add Services details here...</h1><br>
    <form action="{{url('store_ser')}}" method="post" enctype="multipart/form-data">
        <input type="text" name="s_name" placeholder="enter your service name:" class="form-control"> 
        @csrf
        <br>
        <input type="file" name="s_image" placeholder="enter your service image:" class="form-control"><br>
        <input type="submit" value="Add Service" class="btn btn-danger">
    </form>
</div>

@endsection