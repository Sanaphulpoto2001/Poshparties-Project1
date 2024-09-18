@extends('admin.master')
@section('content')
<div class="container">
    <h1>Add Venues details here...</h1><br>
    <form action="{{url('store_ven')}}" method="post" enctype="multipart/form-data">

        @csrf
        <br>
        
        <select class="form-select" aria-label="Default select example" class="form-select" name="category_id">
        <option selected>Select Category</option>
            @foreach ($category as $cat)
            <option value="{{$cat->id}}">{{$cat->c_name}}</option>
            @endforeach           
        </select><br>
        <input type="text" name="v_name" placeholder="enter your venue name:" class="form-control"><br>
        <input type="text" name="v_location" placeholder="enter your venue location:" class="form-control"><br>
        <input type="file" name="v_image" placeholder="enter your venue image:" class="form-control"><br>
        <input type="submit" value="Add Images" class="btn btn-danger">
    </form>
</div>

@endsection