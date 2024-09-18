@extends('admin.master')
@section('content')
<div class="container">
    <h1 >Add category details here...</h1><br>
    <form action="{{url('store_cat')}}" method="post" enctype="multipart/form-data">
        <input type="text" name="c_name" placeholder="enter your category name:" class="form-control"> 
        @csrf
        <br>
        <input type="file" name="c_image" placeholder="enter your category image:" class="form-control"><br>
        <input type="submit" value="Add Category" class="btn btn-danger">
    </form>
</div>

@endsection