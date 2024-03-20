<?php

namespace App\Http\Controllers;

use App\Models\bookingModel;
use Illuminate\Http\Request;

class bookfronted extends Controller
{
    public function book(){
        return view('fronted.book');
    }
    // public function storebook(Request $request){
    //     date_default_timezone_set('Asia/Kolkata');
    //     $store_booking = new bookingModel;
    //     $store_booking->name = $request->name;
    //     $store_booking->email = $request->email;
    //     $store_booking->date = $request->date;
    //     $store_booking->people = $request->people;
    //     $store_booking->message = $request->message;
    //     $store_booking->save();
    //     return redirect()->back()->with('success','booking done Successfully');
    // }
}
