<?php

namespace App\Http\Controllers;

use App\Models\aboutmodel;
use Illuminate\Http\Request;

class aboutbackend extends Controller
{
    public function aboutBackend(){
        $allabout = aboutmodel::all();
        return view('dashboard.about.about',compact('allabout'));
    }
    public function addaboutBackend(){
       return view('dashboard.about.addabout');
    }
    public function storeaboutBackend(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $storeaboutbackend = new aboutmodel;
        aboutmodel::truncate();
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageName1 = time().'_'.$image1->getClientOriginalName();
            $image1->move(public_path('images'), $imageName1);
            $storeaboutbackend->image1 = $imageName1;
        }
        
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageName2 = time().'_'.$image2->getClientOriginalName();
            $image2->move(public_path('images'), $imageName2);
            $storeaboutbackend->image2 = $imageName2;
        }
        
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageName3 = time().'_'.$image3->getClientOriginalName();
            $image3->move(public_path('images'), $imageName3);
            $storeaboutbackend->image3 = $imageName3;
        }
        
        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4');
            $imageName4 = time().'_'.$image4->getClientOriginalName();
            $image4->move(public_path('images'), $imageName4);
            $storeaboutbackend->image4 = $imageName4;
        }
        $storeaboutbackend->heading=$request->heading;
        $storeaboutbackend->description=$request->description;
        $storeaboutbackend->year=$request->year;
        $storeaboutbackend->popular=$request->popular;
        $storeaboutbackend->save();
        return redirect()->route('backend.about')->with('success','Insert Successfully');
    
    }
    public function editaboutBackend($id){
        $editaboutbackend = aboutmodel::find($id);      
        return view('dashboard.about.editabout',compact('editaboutbackend'));
    }
    public function updateaboutBackend(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $updateaboutBackend = aboutmodel::find($request->id);
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageName1 = time().'_'.$image1->getClientOriginalName();
            $image1->move(public_path('images'), $imageName1);
            $updateaboutBackend->image1 = $imageName1;
        }
        
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageName2 = time().'_'.$image2->getClientOriginalName();
            $image2->move(public_path('images'), $imageName2);
            $updateaboutBackend->image2 = $imageName2;
        }
        
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageName3 = time().'_'.$image3->getClientOriginalName();
            $image3->move(public_path('images'), $imageName3);
            $updateaboutBackend->image3 = $imageName3;
        }
        
        if ($request->hasFile('image4')) {
            $image4 = $request->file('image4');
            $imageName4 = time().'_'.$image4->getClientOriginalName();
            $image4->move(public_path('images'), $imageName4);
            $updateaboutBackend->image4 = $imageName4;
        }
        $updateaboutBackend->heading=$request->heading;
        $updateaboutBackend->description=$request->description;
        $updateaboutBackend->year=$request->year;
        $updateaboutBackend->popular=$request->popular;
        $updateaboutBackend->save();
        return redirect()->route('backend.about')->with('success','Update Successfully');   

    }
    public function deleteaboutBackend($id){
        $deleteaboutbackend = aboutmodel::find($id);
        if ($deleteaboutbackend) {
           $deleteaboutbackend->delete();
           return redirect()->back()->with('success','deleted sucessfully');
        }else{
            return redirect()->back()->with('failed','Something wrong');
        }
    }
}
