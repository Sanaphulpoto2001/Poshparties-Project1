@extends('admin.master')
@section('content')
<div class="container">
    <h1>Edit Gallery details here...</h1><br>
    <form action="{{url('update_img',$gallery->id)}}" method="post" enctype="multipart/form-data">
   
        @csrf
        <br>
        <input type="file" name="g_image" placeholder="enter your gallery image:" class="form-control"><br>
        <img src="{{ asset('gallery/' . $gallery->g_image) }}" alt="">
        <input type="submit" value="Update Gallery" class="btn btn-danger">
    </form>

@endsection