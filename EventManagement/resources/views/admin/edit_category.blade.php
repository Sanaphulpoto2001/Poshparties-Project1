@extends('admin.master')
@section('content')
<div class="container">
    <h1>Edit category details here...</h1><br>
    <form action="{{url('update_cat',$category->id)}}" method="post" enctype="multipart/form-data">
        <input type="text" name="c_name" value="{{$category->c_name}}" placeholder="enter your category name:" class="form-control"> 
        @csrf
        <br>
        <input type="file" name="c_image" placeholder="enter your category image:" class="form-control"><br>
        <img src="{{ asset('category/' . $category->c_image) }}" alt="">
        <input type="submit" value="Update Category" class="btn btn-danger">
    </form>

@endsection