@extends('admin.master')
@section('content')
<div class="container">
    <h1>Add Gallery details here...</h1><br>
    <form action="{{url('store_img')}}" method="post" enctype="multipart/form-data">
       
        @csrf
        <br>
        <input type="file" name="g_image" placeholder="enter your gallery image:" class="form-control"><br>
        <input type="submit" value="Add Images" class="btn btn-danger">
    </form>
</div>

@endsection