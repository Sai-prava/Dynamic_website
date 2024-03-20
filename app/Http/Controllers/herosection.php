<?php

namespace App\Http\Controllers;

use App\Models\heroModel;
use Illuminate\Http\Request;

class herosection extends Controller
{
    public function heroSection(){
        $allheroSection = heroModel::all();
        return view('dashboard.banner.banner',compact('allheroSection'));
}
    public function addheroSection(){
        return view('dashboard.banner.addbanner');
    }
    public function storeheroSection(Request $request){
         date_default_timezone_set('Asia/Kolkata');
         $storeherosection = new heroModel;
         heroModel::truncate();

         if ($request->hasFile('image')) {
           $image = $request->file('image');
           $imageName = time().'_'.$image-> getClientOriginalName();
           $image->move(public_path('image'),$imageName);
           $storeherosection->image=$imageName;
         }
         $storeherosection->heading=$request->heading;
         $storeherosection->description=$request->description;
         $storeherosection->save();
         return redirect()->route('backend.herosection')->with('success','Insert Successfully');
    }
    public function editheroSection($id){
         $editherosection = heroModel::find($id);
         return view('dashboard.banner.editbanner',compact('editherosection'));
    }
    public function updateherosection(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $updateheroSection = heroModel::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image-> getClientOriginalName();
            $image->move(public_path('image'),$imageName);
            $updateheroSection->image=$imageName;
          }
          $updateheroSection->heading=$request->heading;
          $updateheroSection->description=$request->description;
          $updateheroSection->save();
          return redirect()->route('backend.herosection')->with('success','Update Successfully');

    }
    public function deleteheroSection($id){
        $deleteherosection = heroModel::find($id);
        if ($deleteherosection) {
           $deleteherosection->delete();
           return redirect()->back()->with('success','deleted sucessfully');
        }else{
            return redirect()->back()->with('failed','Something wrong');
        }
        }
    }

