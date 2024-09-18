@extends('admin.master')
@section('content')
<div class="container">
    <h1>Edit Venues details here...</h1><br>
    <form action="{{url('update_ven',$venue->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <br>
        <input type="text" name="v_name" value="{{$venue->v_name}}" placeholder="enter your venue name:" class="form-control"><br>
        <input type="text" name="v_location" value="{{$venue->v_location}}" placeholder="enter your venue location:" class="form-control"><br>
        <select name="category_id" class="form-select">
            <option value="">Edit Category</option>
            @foreach($category as $category) 
                <option value="{{ $category->id }}" {{ $venue->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->c_name }}
                </option>
            @endforeach
        </select>
 <br>
        <input type="file" name="v_image" placeholder="enter your venue image:" class="form-control"><br>
        <img src="{{ asset('venue/' . $venue->v_image) }}" alt=""><br><br>
        <input type="submit" value="Update Venue" class="btn btn-danger">
    </form>

@endsection