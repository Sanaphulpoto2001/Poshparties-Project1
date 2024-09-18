@extends('master')
@section('content')

    <h1 class="text-center">Book a Hotel</h1>

    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('hbookings.store') }}" method="POST">
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="b_name"  required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email"   required>

        <label for="number">Phone Number:</label>
        <input type="text" id="number" name="b_number" value="{{ old('b_number') }}" required>

        <label for="date">Booking Date:</label>
        <input type="date" id="date" name="b_date" value="{{ old('b_date') }}" required>

        <label for="theme">Theme/Color Scheme</label>
        <input type="text" id="theme" name="theme">

        <label for="guests">Number of Guests</label>
        <select id="guests" name="guests" required>
            <option value="1-50">1-50</option>
            <option value="51-100">51-100</option>
            <option value="101-150">101-150</option>
            <option value="151-200">151-200</option>
            <option value="200+">200+</option>
        </select>

        <label for="venue">Select Hotel:</label>
        <select name="hotel_id" id="venue" required>
            <option  disabled selected>Select a Hotel</option>
            @foreach($hotel as $hotel)
                <option value="{{ $hotel->id }}">{{ $hotel->h_name }}</option>
            @endforeach
        </select>

        <label for="time">Select Time:</label>
        <select name="time_id" id="time" required>
            <option value="" disabled selected>Select a Time Slot</option>
            @foreach($time as $time)
                <option value="{{ $time->id }}">{{ $time->time_in }} - {{ $time->time_out }}</option>
            @endforeach
        </select>

        <label for="payment-method">Preferred Payment Method</label>
        <select id="payment-method" name="payment_method" required>
            <option value="cash">Cash on Deleivery</option>
            <option value="credit_card">Credit Card</option>
            <option value="debit_card">Debit Card</option>
            <option value="bank_transfer">Bank Transfer</option>
            <option value="paypal">PayPal</option>
            <option value="other">Other</option>
        </select> 

        <label for="special-requests">Special Requests/Instructions</label>
        <textarea id="special-requests" name="special_requests" rows="4"></textarea>

        <button type="submit">Book Now</button>
    </form>

    <br><br><br><br>
    @endsection

