@extends('admin.master')
@section('content')
<div class="container">
    <h1>Add Timing details here...</h1><br>
    <form action="{{url('store_tm')}}" method="post" >
        <input type="time" name="time_in" placeholder="enter your timing name:" class="form-control"> 
        @csrf
        <br>
        <input type="time" name="time_out" placeholder="enter your timing image:" class="form-control"><br>
        <input type="date" name="date" placeholder="enter your date:" class="form-control"><br>
        <input type="submit" value="Add Timing" class="btn btn-danger">
    </form>
</div>

@endsection