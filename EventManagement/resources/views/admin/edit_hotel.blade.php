@extends('admin.master')
@section('content')
<div class="container">
    <!-- 
    <form action="{{url('update_hotl',$hotel->id)}}" method="post" enctype="multipart/form-data">
        <input type="text" name="h_name" value="{{$hotel->h_name}}" placeholder="enter your hotel name:" class="form-control"> 
        @csrf
        <br>
        <input type="file" name="h_image" placeholder="enter your hotel image:" class="form-control"><br>
        <img src="{{ asset('hotel/' . $hotel->h_image) }}" alt="">
        <input type="submit" value="Update Hotel" class="btn btn-primary">
    </form> -->
    <h1>Edit Hotels details here...</h1><br>
    <form action="{{url('update_hotl',$hotel->id)}}" method="post" enctype="multipart/form-data">
   
   @csrf
   <br>
   <input type="text" name="h_name" value="{{$hotel->h_name}}" placeholder="enter your hotel name:" class="form-control">
   <input type="text" name="h_location" value="{{$hotel->h_location}}" placeholder="enter your hotel location:" class="form-control">
   <select name="category_id" class="form-select">
       <option value="">Edit Category</option>
       @foreach($category as $category) 
           <option value="{{ $category->id }}" {{ $hotel->category_id == $category->id ? 'selected' : '' }}>
               {{ $category->c_name }}
           </option>
       @endforeach
    </select>
   <input type="file" name="h_image" placeholder="enter your hotel image:" class="form-control"><br>
   <img src="{{ asset('/hotel' . $hotel->h_image) }}" alt="">
   <input type="submit" value="Update hotel" class="btn btn-danger">
</form>

@endsection