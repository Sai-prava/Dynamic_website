<?php

namespace App\Http\Controllers;

use App\Models\dinnerModel;
use App\Models\lunchModel;
use App\Models\menuModel;
use Illuminate\Http\Request;

class menubackend extends Controller
{
    public function menuBackend(){
        $allmenu = menuModel::all();
        return view('dashboard.menu.menu',compact('allmenu'));
    }
    public function addmenuBackend(){
        return view('dashboard.menu.addmenu');
    }
    public function storemenuBackend(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $storemenubackend =  new menuModel;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $storemenubackend->image = $imageName;
        }
        $storemenubackend->item=$request->item;
        $storemenubackend->detail=$request->detail;
        $storemenubackend->price=$request->price;
        $storemenubackend->save();
        return redirect()->route('backend.menu')->with('success','Insert Successfully');
        
    }
    public function editmenuBackend($id){
      $editmenubackend = menuModel::find($id);
      return view('dashboard.menu.editmenu',compact('editmenubackend'));
    }
    public function updatemenuBackend(Request $request){
        date_default_timezone_set('Asia/Kolkata');
        $updatemenubackend =   menuModel::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $updatemenubackend->image = $imageName;
        }
        $updatemenubackend->item=$request->item;
        $updatemenubackend->detail=$request->detail;
        $updatemenubackend->price = $request->price;
        $updatemenubackend->save();
        return redirect()->route('backend.menu')->with('success','Update Successfully');
    }
    public function deletemenuBackend($id){
      $deletemenubackend = menuModel::find($id);
      if ($deletemenubackend) {
        $deletemenubackend->delete();
        return redirect()->back()->with('Success','Deleted Successfully');
      }else{
        return redirect()->back()->with('Error','Failed');
      }
    }

    //lunch

    public function lunch(){
      $allLunch = lunchModel::all();
      return view('dashboard.menu.lunch',compact('allLunch'));
    }
    public function addLunch(){
      return view('dashboard.menu.addlunch');
    }
    public function storeLunch(Request $request){
      date_default_timezone_set('Asia/Kolkata');
      $storelunch =  new lunchModel;
      if ($request->hasFile('image')) {
          $image = $request->file('image');
          $imageName = time().'_'.$image->getClientOriginalName();
          $image->move(public_path('images'), $imageName);
          $storelunch->image = $imageName;
      }
      $storelunch->item=$request->item;
      $storelunch->detail=$request->detail;
      $storelunch->price=$request->price;
      $storelunch->save();
      return redirect()->route('backend.lunch')->with('success','Insert Successfully');
    }
    public function editLunch($id){
       $editlunch = lunchModel::find($id);
       return  view('dashboard.menu.editlunch',compact('editlunch'));
    }
    public function updateLunch(Request $request){
      date_default_timezone_set('Asia/Kolkata');
      $updatelunch =   lunchModel::find($request->id);
      if ($request->hasFile('image')) {
          $image = $request->file('image');
          $imageName = time().'_'.$image->getClientOriginalName();
          $image->move(public_path('images'), $imageName);
          $updatelunch->image = $imageName;
      }
      $updatelunch->item=$request->item;
      $updatelunch->detail=$request->detail;
      $updatelunch->price = $request->price;
      $updatelunch->save();
      return redirect()->route('backend.lunch')->with('success','Update Successfully');
    }

    public function deleteLunch($id){
      $deletelunch = lunchModel::find($id);
      if ($deletelunch) {
        $deletelunch->delete();
        return redirect()->back()->with('Success','Deleted Successfully');
      }else{
        return redirect()->back()->with('Error','Failed');
      }
    }

    // dinner
    public function dinner(){
      $alldinner = dinnerModel::all();
      return view('dashboard.menu.dinner',compact('alldinner'));
    }
    public function addDinner(){
      return view('dashboard.menu.addDinner');

    }
    public function storeDinner(Request $request){
      date_default_timezone_set('Asia/Kolkata');
      $storedinner =  new dinnerModel;
      if ($request->hasFile('image')) {
          $image = $request->file('image');
          $imageName = time().'_'.$image->getClientOriginalName();
          $image->move(public_path('images'), $imageName);
          $storedinner->image = $imageName;
      }
      $storedinner->item=$request->item;
      $storedinner->detail=$request->detail;
      $storedinner->price=$request->price;
      $storedinner->save();
      return redirect()->route('backend.dinner')->with('success','Insert Successfully');
    }
    public function editDinner($id){
      $editdinner = dinnerModel::find($id);
      return  view('dashboard.menu.editDinner',compact('editdinner'));
   }
   public function updateDinner(Request $request){
    date_default_timezone_set('Asia/Kolkata');
    $updatedinner =   dinnerModel::find($request->id);
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $updatedinner->image = $imageName;
    }
    $updatedinner->item=$request->item;
    $updatedinner->detail=$request->detail;
    $updatedinner->price = $request->price;
    $updatedinner->save();
    return redirect()->route('backend.dinner')->with('success','Update Successfully');
  }

  public function deleteDinner($id){
    $deletedinner = dinnerModel::find($id);
    if ($deletedinner) {
      $deletedinner->delete();
      return redirect()->back()->with('Success','Deleted Successfully');
    }else{
      return redirect()->back()->with('Error','Failed');
    }
  }

}
