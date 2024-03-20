<?php

namespace App\Http\Controllers;

use App\Models\serviceModel;
use Illuminate\Http\Request;

class servicebackendController extends Controller
{
    public function serviceBackend(){
        $allService = serviceModel::all();
        return view('dashboard.service.service',compact('allService'));
    }
    public function addserviceBackend(){
        return view('dashboard.service.addService');
    }
    public function storeserviceBackend(Request $request){
        date_default_timezone_set('Asia/Kolkata');
         $storeservicebackend = new serviceModel;

         if ($request-> hasFile('logo')) {
           $image = $request->file('logo');
           $imageName = time().'_'.$image-> getClientOriginalName();
           $image->move(public_path('images'),$imageName);
           $storeservicebackend->logo = $imageName;
         
         }
         $storeservicebackend->heading=$request->heading;
         $storeservicebackend->description=$request->description;
         $storeservicebackend->save();  
         return redirect()->route('backend.service')->with('success','Insert Successfully');         

    }
    public function editserviceBackend($id){
        $editservicebackend = serviceModel::find($id);
        return view('dashboard.service.editService',compact('editservicebackend'));
    }
    public function updateserviceBackend(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $updateservicebackend = serviceModel::find($request->id);

        if ($request-> hasFile('logo')) {
            $image = $request->file('logo');
            $imageName = time().'_'.$image-> getClientOriginalName();
            $image->move(public_path('images'),$imageName);
            $updateservicebackend->logo = $imageName;
          
          }
          $updateservicebackend->heading=$request->heading;
          $updateservicebackend->description=$request->description;
          $updateservicebackend->save(); 
          return redirect()->route('backend.service')->with('success','update successfully');
    }
    public function deleteserviceBackend($id){
       $deleteservicebackend = serviceModel::find($id);
      
       if ($deleteservicebackend) {
          $deleteservicebackend->delete();
          return redirect()->back()->with('success','deleted sucessfully');
       }else{
        return redirect()->back()->with('failed','Something wrong');
       }
    }
}
