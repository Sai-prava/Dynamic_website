<?php

namespace App\Http\Controllers;

use App\Mail\bookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function bookingemail()
    {
        return view('fronted.bookemail');
    }

    public function email()
    {
        return view('fronted.book');
    }

    public function storeEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'date' => 'date', // Assuming 'date' is a date field
            'people' => 'required|string|max:255',
            'message' => 'required|string|max:500', // Adjust max length as needed
        ]);

        $userEmail = $request->input('email');

        Mail::to(['saipravakhilar88@gmail.com', $userEmail])->send(new bookingMail($request->all()));

        return redirect()->back()->with('success', 'Email Received Successfully. We will get back to you soon.');
    }
}
