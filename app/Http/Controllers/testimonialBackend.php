<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;

class testimonialBackend extends Controller
{
    public function testimonialBackend(){
        $alltestimonial = testimonial::all();
        return view('dashboard.Testimonial.testimonial',compact('alltestimonial'));
    }
    public function addtestimonialBackend(){
        return view('dashboard.Testimonial.addTestimonial');
    }
    public function storetestimonialBackend(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $storetestimonialbackend = new testimonial; 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $storetestimonialbackend->image = $imageName;
        }
        $storetestimonialbackend->description=$request->description;
        $storetestimonialbackend->name=$request->name;
        $storetestimonialbackend->Profession=$request->Profession;
        $storetestimonialbackend->save();
        return redirect()->route('backend.testimonial')->with('success','Insert Successfully');
}
public function edittestimonialBackend($id){
   $edittestimonialbackend = testimonial::find($id);
   return view('dashboard.Testimonial.editTestimonial',compact('edittestimonialbackend'));
}
public function updatetestimonialBackend(Request $request){
    date_default_timezone_set('Asia/Kolkata');
    $updatetestimonialBackend = testimonial::find($request->id);
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $updatetestimonialBackend->image = $imageName;
    }
    $updatetestimonialBackend->description=$request->description;
    $updatetestimonialBackend->name=$request->name;
    $updatetestimonialBackend->Profession=$request->Profession;
    $updatetestimonialBackend->save();
    return redirect()->route('backend.testimonial')->with('success','Insert Successfully');

}
public function deletetestimonialBackend($id){
    $deletetestimonialbackend = testimonial::find($id);
    if ($deletetestimonialbackend) {
       $deletetestimonialbackend->delete();
     return redirect()->back()->with('Success','Deleted Successfully');
     } else{
     return redirect()->back()->with('Error','Failed');
}
}
}
