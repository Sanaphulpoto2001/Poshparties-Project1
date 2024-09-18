<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\HotelBook;
use App\Models\Organizer;
use App\Models\Time;
use App\Models\Venue;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function login()
    {
        if (Auth::user()->type == "user") {
            return redirect('/');
        } else {
            return view('admin.index');
        }
    }
    // public function contact()
    // {
    //     return view('contactus');
    // }

    public function index()
    {
        $category = Category::all();
        $gallery = Gallery::all();
        $hotel = Hotel::all();
        $venue = Venue::all();
        $organizer = Organizer::all();
        return view('welcome', compact('category', 'gallery', 'hotel', 'venue','organizer'));
    }
    public function categories()
    {
        $category = Category::all();
        return view('categories', compact('category'));
    }

    public function gallery1()
    {
        $gallery = Gallery::all();
        return view('gallery', compact('gallery'));
    }

    public function hotel1()
    {
        $hotel = Hotel::all();
        $category = Category::all();
        return view('hotels', compact('hotel', 'category'));
    }
    public function venue()
    {
        $venue = Venue::all();
        return view('venue', compact('venue'));
    }
    public function booking()
    {
        $user = Auth::user();
        $venue = Venue::all();
        $time = Time::all();
        return view('bookingform', compact('venue', 'time', 'user'));
    }

    public function book(Request $request)
    {
        // Validate input
        $request->validate([
            'venue_id' => 'required|exists:venues,id',
            'time_id' => 'required|exists:times,id',
            'b_name' => 'required|string|max:255',
            'b_number' => 'required|string|max:255',
            'b_date' => 'required|date',
            'theme' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'guests' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'special_requests' => 'required|string|max:255',
        ]);
    
        $user = Auth::user();
        $venue = Venue::findOrFail($request->venue_id);
        $time = Time::findOrFail($request->time_id);
        $bookingDate = $request->b_date;
        $theme = $request->theme;
        $guests = $request->guests;
        $payment_method = $request->payment_method;
        $special_requests = $request->special_requests;
    
  
        $existingBooking = Booking::where('venue_id', $venue->id)
            ->where('time_id', $time->id)
            ->whereDate('b_date', $bookingDate)
            ->first();
    
        if ($existingBooking) {
            return redirect()->route('bookings.create')->with('error', 'Venue is already booked for this time slot on the selected date.');
        }
    
        
        Booking::create([
            'user_id' => $user->id,
            'venue_id' => $venue->id,
            'time_id' => $time->id,
            'b_name' => $request->b_name,
            'email' => $request->email,
            'b_number' => $request->b_number,
            'b_date' => $bookingDate,
            'theme' => $theme,
            'guests' => $guests,
            'payment_method' => $payment_method,
            'special_requests' => $special_requests,
        ]);
    
        return redirect('/booknow')->with('success', 'Booking successful!');
    }
    public function service()
    {
        $service = Service::all();
        return view('services',compact('service'));
    }


    public function faqs()
    {
        return view('faqs');
    }
    public function hbooking()
    {
        $user = Auth::user();
        $hotel = Hotel::all();
        $time = Time::all();
        return view('hbookingform', compact('hotel', 'time', 'user'));
    }

    public function hbook(Request $request)
    {
        // Validate input
        $request->validate([
            'hotel_id' => 'required|exists:hotels,id',
            'time_id' => 'required|exists:times,id',
            'b_name' => 'required|string|max:255',
            'b_number' => 'required|string|max:255',
            'b_date' => 'required|date',
            'theme' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'guests' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'special_requests' => 'required|string|max:255',
        ]);
    
        $user = Auth::user();
        $hotel = Hotel::findOrFail($request->hotel_id);
        $time = Time::findOrFail($request->time_id);
        $bookingDate = $request->b_date;
        $theme = $request->theme;
        $guests = $request->guests;
        $payment_method = $request->payment_method;
        $special_requests = $request->special_requests;
    
  
        $existingBooking = HotelBook::where('hotel_id', $hotel->id)
            ->where('time_id', $time->id)
            ->whereDate('b_date', $bookingDate)
            ->first();
    
        if ($existingBooking) {
            return redirect()->route('hbookings.create')->with('error', 'Hotel is already booked for this time slot on the selected date.');
        }
    
        
        HotelBook::create([
            'user_id' => $user->id,
            'hotel_id' => $hotel->id,
            'time_id' => $time->id,
            'b_name' => $request->b_name,
            'email' => $request->email,
            'b_number' => $request->b_number,
            'b_date' => $bookingDate,
            'theme' => $theme,
            'guests' => $guests,
            'payment_method' => $payment_method,
            'special_requests' => $special_requests,
        ]);
    
        return redirect('/hbooknow')->with('success', 'Booking successful!');
    }
    public function organize()
    {
        $organizer = Organizer::all();
        return view('eventorganizer',compact('organizer'));
    }
}



