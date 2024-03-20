<?php

namespace App\Http\Controllers;

use App\Models\contactModel;
use Illuminate\Http\Request;

class contactBackend extends Controller
{
    public function viewcontact(){
        $viewcontact = contactModel::all();
        return view('dashboard.contact.conatctview',compact('viewcontact'));
    }
    public function deletecontact($id){
       $deletecontact = contactModel::find($id);
       if ($deletecontact) {
         $deletecontact->delete();
         return redirect()->back()->with('Success','Deleted Successfully');
       }else{
        return redirect()->back()->with('Error','Failed');
       }
    }
}
