<?php

namespace App\Http\Controllers;

use App\Models\conatctModel; // Ensure correct namespace
use App\Models\contactModel;
use Illuminate\Http\Request;

class contactfronted extends Controller
{
    public function contact(){
        return view('fronted.contact');
    }
    
    public function storecontact(Request $request){
         date_default_timezone_set('Asia/Kolkata');
         $storecontact = new contactModel;
         $storecontact->name=$request->name;
         $storecontact->email=$request->email;
         $storecontact->subject=$request->subject;
         $storecontact->message=$request->message;
         $storecontact->save();
         return redirect()->back()->with('success','Insert Successfully');
    }
}
