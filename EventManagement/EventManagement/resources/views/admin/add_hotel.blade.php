@extends('admin.master')
@section('content')
<div class="container">
    <h1>Add Hotels details here...</h1><br>
    <form action="{{url('store_hotl')}}" method="post" enctype="multipart/form-data">
        <!-- <input type="text" name="h_name" placeholder="enter your hotel name:" class="form-control">  -->
        @csrf
        <br>
        <select class="form-select" aria-label="Default select example" class="form-select" name="category_id">
        <option selected>Select Category</option>
            @foreach ($category as $cat)
            <option value="{{$cat->id}}">{{$cat->c_name}}</option>
            @endforeach           
        </select><br>
        <input type="text" name="h_name" placeholder="enter your hotel name:" class="form-control"><br>
        <input type="text" name="h_location" placeholder="enter your hotel location:" class="form-control"><br>
        <input type="file" name="h_image" placeholder="enter your hotel image:" class="form-control"><br>
        <input type="submit" value="Add Hotel" class="btn btn-danger">
    </form>
</div>

@endsection