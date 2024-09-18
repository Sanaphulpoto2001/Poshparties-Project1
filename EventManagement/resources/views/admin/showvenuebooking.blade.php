@extends('admin.master')
@section('content')
<div class="container">
    <h1>Show Venues Booking Here..</h1>
    <a href="{{url('')}}" class="btn btn-secondary">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Number</th>
                <th>Date</th>
                <th>Email</th>
                <th>Theme</th>
                <th>Guests List</th>
                <th>Special Request</th>
                <th>Payment Method</th>
                <th>User Name</th>
                <th>Venue Name</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->b_name}}</td>
                <td>{{$book->b_number}}</td>
                <td>{{$book->b_date}}</td>
                <td>{{$book->email}}</td>
                <td>{{$book->theme}}</td>
                <td>{{$book->guests}}</td>
                <td>{{$book->special_requests}}</td>
                <td>{{$book->payment_method}}</td>
                <td>{{$book->user->name}}</td>
                <td>{{$book->venue->v_name}}</td>
                <td>{{$book->time->time_in}} to {{$book->time->time_out}}</td>
                
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection