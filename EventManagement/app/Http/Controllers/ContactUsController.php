<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class ContactUsController extends Controller
{
    public function contactus()
    {
        $user = Auth::user();
        return view('contactus', ['user' => $user]);
    }

    public function submitForm(Request $request)
    {
        // Validate the form input
        $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact us entry
        ContactUs::create([
            'user_id' => Auth::id(),
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirect or show a success message
        return redirect('/')->with('success', 'Your message has been sent!');
    }
    
}


