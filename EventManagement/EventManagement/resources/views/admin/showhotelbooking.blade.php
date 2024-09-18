@extends('admin.master')
@section('content')
<div class="container">
    <h1>Show Hotels Booking Here..</h1>
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
                <th>Hotel Name</th>
                <th>Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hbooking as $hbook)
            <tr>
                <td>{{$hbook->id}}</td>
                <td>{{$hbook->b_name}}</td>
                <td>{{$hbook->b_number}}</td>
                <td>{{$hbook->b_date}}</td>
                <td>{{$hbook->email}}</td>
                <td>{{$hbook->theme}}</td>
                <td>{{$hbook->guests}}</td>
                <td>{{$hbook->special_requests}}</td>
                <td>{{$hbook->payment_method}}</td>
                <td>{{$hbook->user->name}}</td>
                <td>{{$hbook->hotel->h_name}}</td>
                <td>{{$hbook->time->time_in}} to {{$hbook->time->time_out}}</td>
                
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>

@endsection